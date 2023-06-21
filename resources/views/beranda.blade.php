@extends('navbar')
@section('navbar')

<section>
  <div class="container pt-3">
    <h3 class="fw-bold mt-5">Featured Product</h3>
    <div class="row justify-content-center">
      @foreach ($product as $item)
        <div class="col col-md-4 mb-5 text-center">
          <div class="card mt-5 ms-4" style="width: 18rem;">
            <img src="/storage/{{ $item->foto }}" class="card-img-top">
            <div class="card-body text-center">
              <h5 class="card-title">{{ $item->nama }}</h5>
              <p class="card-text">Rp. {{ number_format($item->harga) }}</p>
              <a href="product/detail/{{ $item->id_product }}" class="btn mt-auto text-white" style="background-color:#47597E;">Lihat Detail</a>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</section>

<footer class="py-3 my-3 border-top">
  <p class="text-center">&copy; 2023 <a href="" target="_blank" class="fw-bold text-decoration-none">MarketPlace</a></p>
</footer>
@endsection