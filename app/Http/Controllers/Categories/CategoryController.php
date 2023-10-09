<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategory;
use App\Mail\CreateMainCategory;
use App\Mail\CreateSubCategory;
use App\Mail\DeleteMainCategory;
use App\Mail\DeleteSubCategory;
use App\Mail\UnActiveMainCategory;
use App\Models\Category;
use App\Models\DeleteCategory;
use App\Models\DeleteSubCategory as ModelsDeleteSubCategory;
use App\Models\MainCategory;
use App\Models\User;
use Dotenv\Validator;
use Error;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Rule;
use Symfony\Contracts\EventDispatcher\Event;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $paginator = Category::with('BelongTOMainCategory')
            ->whereHas('BelongTOMainCategory', function ($query) {
                $query->where('deleted_at', null);
            })
            ->orderBy('created_at', 'desc')
            ->Paginate(10);
        return view('Admin.Categories.SubCategory.sub-category', compact('paginator'));
    }
    public function create()
    {
        $main_categories = MainCategory::all();
        return view('Admin.Categories.SubCategory.add-sub-category', compact('main_categories'));
    }

    public function store(CreateCategory $request)
    {
        try {

            $categoryData = $this->saveData($request);

            $this->sendEmailToAllClient($categoryData);

            return $this->index();
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function saveData($request)
    {
        $newCategory = new Category();

        $newCategory->fill([
            'title' => ['en' => $request->title_en, 'ar' => $request->title_ar],
            'desc' => ['en' => $request->desc_en, 'ar' => $request->desc_ar],
            'category_id' => $request->category_id,
            'active' => filter_var($request->get('active'), FILTER_VALIDATE_BOOLEAN),
        ]);

        $newCategory->save();

        if (!$newCategory)
            throw new Exception('Failed to save main category.');

        return $newCategory;
    }
    public function sendEmailToAllClient($categoryData)
    {
        $users = User::all();
        foreach ($users as $key => $user) {
            Mail::to($user->email)->send(new CreateSubCategory($categoryData));
        }
    }

    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('Admin.Categories.SubCategory.edit-sub-category', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCategory $request, string $id)
    {
        try {
            $category = Category::findOrFail($id);

            if (!$category) return redirect()->back()->withErrors(['message' => 'Not Found This Cateogry !!']);

            $category->update([
                'title' => ['en' => $request->title_en, 'ar' => $request->title_ar],
                'desc' => ['en' => $request->desc_en, 'ar' => $request->desc_ar],
                'category_id' => $request->category_id,
                'active' => filter_var($request->get('active'), FILTER_VALIDATE_BOOLEAN),
            ]);

            $category->save();

            return $this->show($category->id);
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function show(string $id)
    {
        return view('Admin.Categories.SubCategory.show-sub-category');
    }


    public function UpdateActive(Request $request, $id)
    {
        try {
            $category = Category::find($id);

            if (!$category)
                return redirect()->back()->withErrors(['message' => "Not Found This Category"])->withInput();

            $category->active = !$category->active;

            $category->save();

            // if (!$category->active) {
            //     $title = $category->title;
            //     Mail::to(Auth::guard('admin')->user()->email)->send(new UnActiveMainCategory($title));
            // }
            return redirect()->back()->withInput();
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function SearchHandle(Request $request)
    {
        try {
            $paginator = Category::search($request->value)->get();
            return $paginator;
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function destroy(string $id)
    {
        try {
            $category = Category::find($id);
            if (!$category)
                return redirect()->back()->withErrors(['message' => 'Not Found This Category']);

            $token = $this->GenerateRandomToken(70);
            $admin = Auth::guard('admin')->user();
            $CategoryId = $category->id;

            Mail::to($admin->email)->send(new DeleteSubCategory($admin->id, $CategoryId, $token));

            $newDeleteRow = new ModelsDeleteSubCategory();

            $expiration_time =  now()->addMinutes(10);

            $newDeleteRow->fill([
                'admin_id' => $admin->id,
                'category_id' => $CategoryId,
                'token' => $token,
                'expiration_time' => $expiration_time,
            ]);

            if (!$newDeleteRow->save())
                throw new Exception("Error when save delere category info !!");

            // I Want to Return the Response as error to see the message in red (-_-) (-_-)
            return redirect()->back()->withErrors(['message' => "verify email to delete main category"]);
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function GenerateRandomToken($length = 50)
    {
        return Str::random($length);
    }

    public function verifyDelete($userId, $categoryId, $token)
    {
        try {
            $deleteRow = ModelsDeleteSubCategory::where([
                ['admin_id', '=', $userId],
                ['category_id', '=', $categoryId],
                ['token', '=', $token],
                ['expiration_time', '>', now()],
            ])->first();

            if ($deleteRow) {
                Category::findOrFail($categoryId)->delete();
                $deleteRow->delete();
                return redirect()->route('admin.sub-category.index');
            } else {
                return redirect()->back()->with('error', 'Not Found Category !!');
            }
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }
}
