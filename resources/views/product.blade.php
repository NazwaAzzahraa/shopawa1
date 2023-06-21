@extends('dashboard')
@section('dashboard')
<div class="container p-5">
    <div class="card shadow mb-5 mt-5">
        <div class="card-header py-3">
            <h2 class="m-0 font-weight-bold">Data Product</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{ url('product/add') }}" class="btn text-white" style="background-color:#47597E">Tambah Data Product</a>
                <table class="table table-hover table-striped table-bordered mt-3" >
                    <tr class="text-center">
                        <th>NO</th>
                        <th>FOTO</th>
                        <th>NAMA</th>
                        <th>DESKRIPSI</th>
                        <th>HARGA</th>
                        <th>AKSI</th>
                    </tr>
                    @foreach ($product as $key => $item)
                    <tr class="text-center">
                        <td>{{ $key+1 }}</td>
                        <td><img src="/storage/{{ $item->foto }}" width="150"></td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>Rp. {{number_format ($item->harga) }}</td>
                        <td>
                            <a href="product/edit/{{ $item->id_product }}" class="btn btn-succes btn-sm">Edit</a>
                            <a href="product/delete/{{ $item->id_product }}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection