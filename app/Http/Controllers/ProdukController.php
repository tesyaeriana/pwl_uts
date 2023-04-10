<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\ProdukModel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prd = ProdukModel::all();
        return view('produk')
            ->with('prd', $prd);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_produk')
        ->with('url_form',url('/produk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode'=>'required|string|max:5|unique:produk,kode',
            'nama_produk'=>'required|string|max:50',
            'kategori_produk'=>'required|string|max:50',
            'harga'=>'required|string|max:10',
            'stok'=>'required|string|max:5'
        ]);
        $data = ProdukModel::create($request->except(['_token']));

        return redirect('produk')
        ->with('success','Data Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(ProdukModel $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk=ProdukModel::find($id);
        return view('create_produk')
            ->with('prd',$produk)
            ->with('url_form',url('/produk/'.$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'kode'=>'required|string|max:5|unique:produk,kode,'.$id,
            'nama_produk'=>'required|string|max:50',
            'kategori_produk'=>'required|string|max:50',
            'harga'=>'required|string|max:10',
            'stok'=>'required|string|max:5'
        ]);
        $data = ProdukModel::where('id','=',$id)->update($request->except(['_token', '_method']));
        return redirect('produk')
            ->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProdukModel::where('id','=',$id)->delete();
        return redirect('produk')
        ->with('success','data Berhasil Dihapus');
    }
}
