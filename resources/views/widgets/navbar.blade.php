<nav class="navbar navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">  
    <span class="fw-bold font-light" style="font-size: 25px;">PCTECH</span> 
    <div class="navbar-nav w-100 d-flex justify-content-end align-items-center">
      <a class="nav-link me-5 font-light fw-bold" aria-current="page" href="#">Home</a>
      <a class="nav-link me-5 font-light" href="#products">Products</a>
      <a class="nav-link me-5 font-light" href="#about">About Us</a>
      @if (Auth::check())
        <button type="button" class="my-bt me-5 font-dark fw-bold" style="font-size: 14px;">{{ strtoupper(Auth::user()->name)}}</button>
        <a href="/sesi/logout" class="my-bt me-5 font-dark fw-bold" style="font-size: 14px;">LOGOUT</a>
      @else
        <a href="/sesi" class="my-bt me-5 font-dark fw-bold" style="font-size: 14px;">LOGIN</a>
        <a href="/sesi/register" class="my-bt me-5 font-dark fw-bold" style="font-size: 14px;">REGISTER</a>
        
      @endif
      
    </div>
    </div> 
    </nav>