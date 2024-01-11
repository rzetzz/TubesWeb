<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view("products/add_category");
    }
    public function store(Request $request) 
    {
        $request->validate([
            'nama_kategori' => 'required|unique:categories,nama_kategori',
        ]);

        Category::create([
            'nama_kategori' => $request->input('nama_kategori'),
        ]);

        return redirect('/admin')->with('success', 'Kategori berhasil ditambahkan');
    }
}
