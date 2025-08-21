<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Type;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('dashboard.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::select('id', 'name')->get();
        return view('dashboard.products.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $path = $request->file('image')->store('uploads', 'public');
        Product::create([
            'name' => [
                'ar' => $request->name_ar,
                'en' => $request->name_en,
            ],
            'image' => $path,
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'description' => [
                'ar' => $request->description_ar,
                'en' => $request->description_en,
            ],
            'type_id' => $request->type_id,

        ]);
        return redirect()
            ->route('dashboard.products.index')
            ->with('msg', 'Product Added successfully')
            ->with('alert-type', 'success');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $types = Type::select('id', 'name')->get();
        return view('dashboard.products.edit', compact('types', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name_en' => 'required|max:100',
            'name_ar' => 'required|max:100',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'price' => 'required|numeric',
            'type_id' => 'required|exists:types,id',
            'description_en' => 'nullable|string',
            'description_ar' => 'nullable|string',
        ]);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($product->image);
            $path = $request->file('image')->store('uploads', 'public');
        }
        $product->update([
            'name' => [
                'ar' => $request->name_ar,
                'en' => $request->name_en,
            ],
            'price' => $request->price,
            'sale_price' => $request->sale_price,
            'description' => [
                'ar' => $request->description_ar,
                'en' => $request->description_en,
            ],
            'type_id' => $request->type_id,
            'image' => $path ?? $product->image,
        ]);

        return redirect()
            ->route('dashboard.products.index')
            ->with('msg', 'Product Updated successfully')
            ->with('type', 'info');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()
            ->route('dashboard.products.index')
            ->with('msg', 'Product Deleted Successfully')
            ->with('type', 'danger');
    }
    public function show($id)
    {
        $product = \App\Models\Product::with('type')->findOrFail($id);
        return view('front.product-details', compact('product'));
    }
}
