<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'category_id' => 'required|integer',
            'description' => 'required|string',
        ]);

        $validatedData['user_id'] = Auth::id();
        // Create a new product
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->weight = $request->input('weight');
        $product->user_id = $request->input('user_id');
        $product->category_id = $request->input('category_id');
        $product->description = $request->input('description');
        
        // Optionally, generate a slug for the product (if not already included in your table)
        $product->slug = Str::slug($request->input('name'));
        
        // Save the product to the database
        $product->save();

        // Redirect back to the dashboard page with a success message
        return redirect()->route('dashboard')->with('success', 'Product added successfully.');
    }

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

        return redirect()->route('dashboard', $product->slug)->with('success', 'Product updated successfully');
    }

    public function destroy($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $product->delete();

        return redirect()->route('dashboard')->with('success', 'Product deleted successfully.');
    }
    
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        
        return view('details', [
            'product' => $product,
        ]);
    }
}
