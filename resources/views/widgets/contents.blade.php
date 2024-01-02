<div class="bg-dark w-100 d-flex align-items-center justify-content-center" id="products">
    <div class="box-content">
        <h2 class=" text-center fw-bold">OUR PRODUCTS</h2>
        <div class="container mt-5">
            <div class="row">
                <div class="col-2">
                    @include('products.category')
                </div>
                <div class="flex-container col-10">

                    @include('products.index')

                </div>
            </div>
        </div>
    </div>
</div>