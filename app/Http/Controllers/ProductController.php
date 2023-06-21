<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function show(){
        $data ['product'] = Product::all();
        return view('product',$data);
    }

    function add(){
        $data = [
            'action' => url('product/create'),
            'tombol' => 'Simpan',
            'product' => (object)[
                'foto' => '',
                'nama' =>'',
                'deskripsi' => '',
                'harga' => ''
            ]
            ];
            return view('form_product',$data);
    }
    function create(Request $req){
        Product::create([
            'foto' => $req->file('foto')->store('foto'),
            'nama' => $req->nama,
            'deskripsi' => $req->deskripsi,
            'harga' => $req->harga,
        ]);
        return redirect('product'); 
    }

    function delete($id){
        Product::where('id_product',$id)->delete();
        return redirect('product');
    }

    function edit($id){
        $data ['product'] = Product::find($id);
        $data ['action'] = url('product/update').'/'.$data['product']->id_product;
        $data ['tombol'] = 'Update';
        return view('form_product',$data);
    }

    function update(Request $req){
        Product::where('id_product',$req->id)->update([
            'foto' => $req->file('foto')->store('foto'),
            'nama' => $req->nama,
            'deskripsi' => $req->deskripsi,
            'harga' => $req->harga, 
        ]);
        return redirect ('product');
    }
}
