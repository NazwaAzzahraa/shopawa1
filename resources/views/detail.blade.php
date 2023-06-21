@extends('navbar')
@section('navbar')
<section>
    <div class="container px-4 px-lg-5 my-3 p-5">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img src="/storage/{{ $product->foto }}" class="card-img-top mb-5 mb-md-0">
            </div>
            <div class="col-md-6">
                {{-- <div class="small mb-1">SKU: BST-001</div> --}}
                <h1 class="display-5 fw-border">{{ $product->nama }}</h1>
                <div class="fs-5 mb-5 d-flex">
                    {{-- <span class="text-decoration-line-through"></span> --}}
                    <span class="">Rp.{{ number_format($product->harga) }}</span>
                </div>
                <p class="lead">{{ $product->deskripsi }}.</p>
                <div class="d-flex">
                    <input type="number" name="jmlh" id="jmlh" class="form-control text-center me-3" type="num" value="1" style="max-width: 3rem;" required="">
                    <button class="btn me-3 flex-shrink-0 text-white" type="button" style="background-color:#47597E;">
                            <a href="https://api.whatsapp.com/send?phone=6281295810695&text=%22Hello%22" class="text-decoration-none text-white">Beli Sekarang</a>
                    </button>
                </div>  
            </div>
        </div>
    </div>
</section>
<footer class="py-3 my-3 border-top">
    <p class="text-center">&copy; 2023 <a href="" target="_blank" class="fw-bold text-decoration-none">MarketPlace</a></p>
</footer>
@endsection
