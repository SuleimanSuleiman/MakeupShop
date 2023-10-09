<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategory;
use App\Mail\CreateMainCategory;
use App\Mail\DeleteMainCategory;
use App\Mail\UnActiveMainCategory;
use App\Models\Category;
use App\Models\DeleteCategory;
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

class MainCategoryController extends Controller
{
    public function index()
    {
        $paginator = MainCategory::orderBy('created_at', 'desc')->Paginate(6);
        return view('Admin.Categories.MainCategory.main-category', compact('paginator'));
    }
    public function create()
    {
        return view('Admin.Categories.MainCategory.add-main-category');
    }

    public function store(CreateCategory $request)
    {
        try {

            $categoryData = $this->saveData($request);

            $this->sendEmailToAllClient($categoryData);

            return redirect()->route('admin.main-category.index');
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function saveData($request)
    {
        $newCategory = new MainCategory();

        $newCategory->fill([
            'title' => ['en' => $request->title_en, 'ar' => $request->title_ar],
            'desc' => ['en' => $request->desc_en, 'ar' => $request->desc_ar],
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
            Mail::to($user->email)->send(new CreateMainCategory($categoryData));
        }
    }

    public function edit(string $id)
    {
        $main_category = MainCategory::findOrFail($id);
        return view('Admin.Categories.MainCategory.edit-main-category', compact('main_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreateCategory $request, string $id)
    {
        try {
            $main_category = MainCategory::findOrFail($id);

            if (!$main_category) return redirect()->back()->withErrors(['message' => 'Not Found This Cateogry !!']);

            $main_category->update([
                'title' => ['en' => $request->title_en, 'ar' => $request->title_ar],
                'desc' => ['en' => $request->desc_en, 'ar' => $request->desc_ar],
                'active' => filter_var($request->get('active'), FILTER_VALIDATE_BOOLEAN),
            ]);

            $main_category->save();

            return $this->show($main_category->id);
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function show(string $id)
    {
        return view('Admin.Categories.MainCategory.show-main-category');
    }


    public function UpdateActive(Request $request, $id)
    {
        try {
            $category = MainCategory::find($id);

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
            $paginator = MainCategory::search($request->value)->get();
            return $paginator;
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function destroy(string $id)
    {
        try {
            $category = MainCategory::find($id);
            if (!$category)
                return redirect()->back()->withErrors(['message' => 'Not Found This Category']);

            $token = $this->GenerateRandomToken(70);
            $admin = Auth::guard('admin')->user();
            $CategoryId = $category->id;

            Mail::to($admin->email)->send(new DeleteMainCategory($admin->id, $CategoryId, $token));

            $newDeleteRow = new DeleteCategory();

            $expiration_time =  now()->addMinutes(10);

            $newDeleteRow->fill([
                'admin_id' => $admin->id,
                'category_id' => $CategoryId,
                'token' => $token,
                'expiration_time' => $expiration_time,
            ]);

            if (!$newDeleteRow->save())
                throw new Exception("Error when save delere category info !!");

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
            $deleteRow = DeleteCategory::where([
                ['admin_id', '=', $userId],
                ['category_id', '=', $categoryId],
                ['token', '=', $token],
                ['expiration_time', '>', now()],
            ])->first();

            if ($deleteRow) {
                MainCategory::findOrFail($categoryId)->delete();
                $deleteRow->delete();
                return redirect()->route('admin.main-category.index');
            } else {
                return redirect()->back()->with('error', 'Not Found Category !!');
            }
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }
}
