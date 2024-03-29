@extends('auth.layout.auth')
@section('main')
    

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
    <div class="mb-3 d-grid">
    <button name="submit" type="submit" class="btn btn-primary bg-dark">
        LOGIN
    </button>
    </div>
</form>
<p>Don't have an account ? 
    <a href="/sesi/register">Register</a></p>



@endsection