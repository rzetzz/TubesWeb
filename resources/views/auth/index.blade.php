@extends('auth.layout.auth')
@section('main')
    

{{-- <div class="w-50 center border rounded px-3 py-3 mx-auto">
    @error('email')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    @error('password')
            <div class="text-danger">{{ $message }}</div>
    @enderror
    <h1>Login</h1>
    <form action="/sesi/login" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
            
        </div>    
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>  
        <div class="mb-3 d-grid">
            <button name="submit" type="submit" class="btn btn-primary">Login</button>
        </div>  
    </form>    
</div>  --}}

<h1 class="fw-bold mb-5">Login</h1>
<form action="/sesi/login" method="POST">
    @csrf
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" />
    </div>
    <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" />
    </div>
    <div class="mb-3 d-grid mt-5">
    <button name="submit" type="submit" class="btn btn-primary bg-dark">
        LOGIN
    </button>
    </div>
</form>


@endsection