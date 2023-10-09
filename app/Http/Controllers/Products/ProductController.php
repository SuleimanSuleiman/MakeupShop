<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProduct;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Upload;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $categories = Category::all();
        $main_categories = MainCategory::all();

        $perPage = $request->input('perPage', 5);
        $pagination = Product::Paginate($perPage);

        return view('Admin.Products.show-products', [
            'categories' => $categories,
            'main_categories' => $main_categories,
            'pagination' => $pagination,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.Products.Add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProduct $request)
    {
        try {
            $newProduct = $this->createNewProduct($request);

            $this->uploadFiles($request, $newProduct);

            return redirect()->route('admin.product.index');
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function createNewProduct($request)
    {
        $newProduct = new Product();

        $newProduct->fill([
            'name' => ['en' => trim($request->get('name')), 'ar' => 'غير معروف'],
            'desc' => ['en' => trim($request->get('desc')), 'ar' => 'غير معروف'],
            'Quantity' => trim($request->get('Quantity')),
            'price' => trim($request->get('price')),
            'category_id' => trim($request->get('category_id')),
            'market' => trim($request->get('market')),
            'Color' => implode(',', $request->get('color')),
            'Concerns' => implode(',', $request->get('Concerns')),
            'Finish' => implode(',', $request->get('Finish')),
            'Formulation' => implode(',', $request->get('Formulation')),
            'Skin' => implode(',', $request->get('Skin')),
            'Size' => implode(',', $request->get('Size')),
        ]);

        $newProduct->save();

        if (!$newProduct) {
            throw new Exception('Failed to save product.');
        }

        return $newProduct;
    }

    public function uploadFiles($request, $newProduct)
    {

        $files = [];

        if ($request->file('files')) {
            foreach ($request->file('files') as $key => $file) {
                $destinationPath = 'uploads/' . $newProduct->id;
                $file->move($destinationPath, $file->getClientOriginalName());
            }
        }

        foreach ($files as $key => $file) {
            $newImg = new Upload();
            $newImg->path = 'uploads/' . $newProduct->id . '/' . $file->getClientOriginalName();
            $newImg->product_id = $newProduct->id;
            $newImg->save();
        }
        return redirect()->route('admin.product.index');
    }
    public function SearchHandle(Request $request)
    {
        try {
            $paginator = Product::search($request->value)->get();
            return $paginator;
        } catch (Exception $error) {
            return redirect()->back()->withErrors(['message' => $error->getMessage()]);
        }
    }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
