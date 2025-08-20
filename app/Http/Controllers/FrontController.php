<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Type;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;

class FrontController extends Controller
{
    function index()
    {
        $types = Type::latest()->get();
        $products = Product::latest()->get();
        $blogs = Blog::latest()->take(3)->get();
        return view('front.index', compact('types', 'products', 'blogs'));
    }
    function type(Type $type)
    {
        return view('front.type', compact('type'));
    }

    public function product($id)
    {
        $product = \App\Models\Product::with('type')->findOrFail($id);
        $related = Product::where('type_id', $product->type_id)
            ->where('id', '!=', $product->id)
            ->get();
        return view('front.products.product-details', compact('product', 'related'));
    }

    function blogs()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('front.blogs', compact('blogs'));
    }
    function blog(Blog $blog)
    {
        // $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('front.blog', compact('blog'));
    }

    function category($id)
    {
        return view('front.category');
    }
}
