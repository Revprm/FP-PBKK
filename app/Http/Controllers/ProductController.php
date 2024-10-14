<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function update(Request $request, $slug)
    {

        // dd($request->all());

        $product = Product::where('slug', $slug)->firstOrFail();

        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'category_id' => 'required|integer',
            'description' => 'nullable|string',
        ]);

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->weight = $request->input('weight');
        $product->description = $request->input('description');       
        
        $product->save();

        return redirect()->route('products.show', $product->slug)->with('success', 'Product updated successfully');
    }

    public function destroy($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $product->delete();

        return redirect()->route('information')->with('success', 'Product deleted successfully.');
    }
    
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        
        return view('details', [
            'product' => $product,
        ]);
    }
}
