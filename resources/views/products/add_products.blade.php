@extends('auth.layout.auth')
@section('main')
    

<h1 class="fw-bold mb-5">Add Product</h1>
<form action="/admin/create" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" name="name" class="form-control" />
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" name="description" class="form-control" />
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" name="price" class="form-control" />
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" name="stock" class="form-control" />
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <select name="category" class="form-select">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
            @endforeach
        </select>
    </div>
    <a href="/admin/category">Add Category</a></p>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="mb-3 d-grid">
    <button name="submit" type="submit" class="btn btn-primary bg-dark">
        Create
    </button>
    </div>
</form>




@endsection