<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->latest()->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $fileName = uniqid().'.'.$image->getClientOriginalExtension();

            Storage::disk('public')->put(
                'products/'.$fileName,
                file_get_contents($image->getPathname())
            );

            $validated['image'] = 'products/'.$fileName;
        }

        Product::create($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'محصول با موفقیت اضافه شد.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);
        if ($request->hasFile('image')) {

            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

            $image = $request->file('image');

            $fileName = uniqid().'.'.$image->getClientOriginalExtension();

            Storage::disk('public')->put(
                'products/'.$fileName,
                file_get_contents($image->getPathname())
            );

            $validated['image'] = 'products/'.$fileName;
        }

        $product->update($validated);

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'محصول با موفقیت بروزرسانی شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // اگر محصول تصویر داشت، آن را حذف کن
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // حذف رکورد از دیتابیس
        $product->delete();

        return redirect()
            ->route('admin.products.index')
            ->with('success', 'محصول با موفقیت حذف شد.');
    }
}
