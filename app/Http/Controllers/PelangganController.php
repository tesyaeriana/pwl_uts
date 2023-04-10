<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\PelangganModel;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plg = PelangganModel::all();
        return view('pelanggan')
        ->with('plg',$plg);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_pelanggan')
        ->with('url_form', url('/pelanggan'));
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
            'id_pelanggan'=>'required|string|max:6|unique:pelanggan,id_pelanggan',
            'nama_pelanggan' => 'required|string|max:50',
            'alamat_pelanggan' => 'required|string',
            'no_hp' => 'required|string|max:15'
            
        ]);

        $data = PelangganModel::create($request->except(['_token']));
        return redirect('pelanggan')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(PelangganModel $pelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggan = PelangganModel::find($id);
        return view('create_pelanggan')
                ->with('plg', $pelanggan)
                ->with('url_form', url('/pelanggan/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'id_pelanggan'=>'required|string|max:6|unique:pelanggan,id_pelanggan,'.$id,
            'nama_pelanggan' => 'required|string|max:50',
            'alamat_pelanggan' => 'required|string',
            'no_hp' => 'required|string|max:15'
        ]);

        $data = PelangganModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('pelanggan')
            ->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PelangganModel::where('id','=',$id)->delete();
        return redirect('pelanggan')
        ->with('success','data Berhasil Dihapus');
    }
}
