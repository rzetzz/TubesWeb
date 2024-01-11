@foreach ($products as $product)
    <div>  
        <div class="flex-item">
            <div class="image-box">
                <img src="{{ url($product->gambar) }}" alt="{{ $product->nama }}" style="max-width: 200px; max-height: 170px;">
            </div>
            <p>{{ $product->category->nama_kategori }}</p>
            <h5 class="fw-bold">{{ $product->nama_produk }}</h5>
            <p>Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
        </div>
    </div>
@endforeach
