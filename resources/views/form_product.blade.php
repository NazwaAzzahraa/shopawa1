@extends('dashboard')
@section('dashboard')

<style>
     body{
          /* background-color: #47597E ; */
     }
</style>
<div class="vh-100 row justify-content-center align-items-center">
     <div class="card col-lg-7 shadow mb-5 mt-5 align-center">     
          <div class="card-body">
               <div class="" style="color: #47597E">
                    <form action="{{ $action }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="container py-3">
                             <h2 class="fw-bold">Form Input Product</h2>
                           <div class="">
                                <label for="" class="form-label">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" placeholder="Masukan Foto" value="{{ $product->foto }}">
                           </div>
                           <div class="">
                                <label for="" class="form-label">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama Product" value="{{ $product->nama}}">
                           </div>
                           <div class="">
                                <label for="" class="form-label">Deskripsi</label>
                                <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukan Deskripsi" value="{{ $product->deskripsi }}">
                           </div> 
                           <div class="">
                                <label for="" class="form-label">Harga</label>
                                <input type="text" name="harga" id="harga" class="form-control" placeholder="Masukan Harga" value="{{ $product->harga }}">
                           </div>
                           <div class="mt-3">
                            <input type="submit" value="{{ $tombol }}" class="form-control btn text-white" style="background-color:#47597E">
                           </div> 
                        </div>
                    </form>
               </div>
          </div>
     </div>
</div>
@endsection