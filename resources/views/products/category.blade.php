<a class="nav-link" href="?category=#products"><p>All Categories</p></a>
@foreach ($categories as $category)
    <div>
        <a class="nav-link" href="?category={{$category->nama_kategori}}#products"><p>{{$category->nama_kategori}}</p></a>
    </div>
@endforeach
