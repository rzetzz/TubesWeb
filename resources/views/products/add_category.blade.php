@extends('auth.layout.auth')
@section('main')
    

<h1 class="fw-bold mb-5">Add Category</h1>
<form action="/admin/category/create" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama_kategori" class="form-label">Category Name</label>
        <input type="text" name="nama_kategori" class="form-control" />
    </div>
    <div class="mb-3 d-grid">
    <button name="submit" type="submit" class="btn btn-primary bg-dark">
        Create
    </button>
    </div>
</form>




@endsection