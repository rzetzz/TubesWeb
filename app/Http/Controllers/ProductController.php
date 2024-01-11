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
    public function categoryadd()
    {
        $categories = Category::all();
        return view('products/add_products', compact('categories'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Nama harus di isi',
            'description.required' => 'Deskripsi harus di isi',
            'price.required' => 'Harga harus di isi',
            'stock.required' => 'Stok harus di isi',
            'category.required' => 'Kategori harus di isi',
            'image.image' => 'File harus berupa gambar',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 2MB',
        ]);

        $product = new Product([
            'nama_produk' => $request->input('name'),
            'deskripsi' => $request->input('description'),
            'harga' => $request->input('price'),
            'stok' => $request->input('stock'),
            'category_id' => $request->input('category'),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->gambar = 'images/' . $imageName;
        }

        $product->save();

        return redirect('/admin')->with('success', 'Produk berhasil ditambahkan');
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
