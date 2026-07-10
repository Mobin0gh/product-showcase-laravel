<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // صفحه اصلی
    public function home(Request $request)
    {
        $categories = Category::all();

        $products = Product::with('category')

            ->when($request->search, function ($query) use ($request) {
                $query->where('title', 'like', '%' . $request->search . '%');
            })

            ->when($request->category, function ($query) use ($request) {
                $query->where('category_id', $request->category);
            });

        switch ($request->sort) {

            case 'title_asc':
                $products->orderBy('title', 'asc');
                break;

            case 'title_desc':
                $products->orderBy('title', 'desc');
                break;

            case 'oldest':
                $products->orderBy('created_at', 'asc');
                break;

            default:
                $products->orderBy('created_at', 'desc');
        }

        $products = $products
            ->paginate(6)
            ->withQueryString();

        return view('pages.home', compact('products', 'categories'));
    }

    // صفحه محصول
    public function show(Product $product)
    {
        return view('pages.product', compact('product'));
    }
}
