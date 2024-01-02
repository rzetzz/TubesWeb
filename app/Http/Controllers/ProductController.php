<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $category = $request->input('category');
    $categories = Category::all();
    if ($category) {
        // Tampilkan produk berdasarkan kategori
        $products = Product::with('category')->whereHas('category', function ($query) use ($category) {
            $query->where('nama_kategori', $category);
        })->get();
    } else {
        // Tampilkan semua produk
        $products = Product::with('category')->get();
    }

    return view('home', compact('products','categories'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
