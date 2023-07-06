<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        try {
            $products = Product::all();

            return view('products.index', compact('products'));
        } catch (\Exception $e) {
            // Tratar erros de banco de dados ou outras exceções
            return redirect()->back()->with('error', 'Failed to fetch products.');
        }
    }

    public function create()
    {
        $brands = ['Electrolux', 'Brastemp', 'Fischer', 'Samsung', 'LG'];

        return view('products.create', compact('brands'));
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric',
                'brand' => 'required|in:Electrolux,Brastemp,Fischer,Samsung,LG',
            ]);

            Product::create($validatedData);

            return redirect()->route('index')->with('success', 'Product created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Tratar erros de banco de dados ou outras exceções
            return redirect()->back()->with('error', 'Failed to create product.');
        }
    }

    public function edit(Product $product)
    {
        $brands = ['Electrolux', 'Brastemp', 'Fischer', 'Samsung', 'LG'];

        return view('products.edit', compact('product', 'brands'));
    }

    public function update(Request $request, Product $product)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric',
                'brand' => 'required|in:Electrolux,Brastemp,Fischer,Samsung,LG',
            ]);

            $product->update($validatedData);

            return redirect()->route('index')->with('success', 'Product updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Tratar erros de banco de dados ou outras exceções
            return redirect()->back()->with('error', 'Failed to update product.');
        }
    }

    public function show(Product $product)
    {
        try {
            return view('products.show', compact('product'));
        } catch (\Exception $e) {
            // Tratar erros de banco de dados ou outras exceções
            return redirect()->back()->with('error', 'Failed to fetch product details.');
        }
    }

    public function destroy(Product $product)
    {
        try {
            $product->delete();

            return redirect()->route('index')->with('success', 'Product deleted successfully.');
        } catch (\Exception $e) {
            // Tratar erros de banco de dados ou outras exceções
            return redirect()->back()->with('error', 'Failed to delete product.');
        }
    }
}
