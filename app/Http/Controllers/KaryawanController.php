<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\KaryawanModel;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $krw = KaryawanModel::all();
        return view('karyawan')
                    ->with('krw', $krw);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_karyawan')
                ->with('url_form', url('/karyawan'));
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
            'nama' => 'required|string|max:50',
            'jabatan' => 'required|string|max:25',
            'alamat' => 'required|string',
            'hp' => 'required|string|max:15',
            'gaji' => 'required|string|max:10',
        ]);

        $data = KaryawanModel::create($request->except(['_token']));
        return redirect('karyawan')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(KaryawanModel $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = KaryawanModel::find($id);
        return view('create_karyawan')
                ->with('krw', $karyawan)
                ->with('url_form', url('/karyawan/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:50',
            'jabatan' => 'required|string|max:25',
            'alamat' => 'required|string',
            'hp' => 'required|string|max:15',
            'gaji' => 'required|string|max:10',
        ]);

        $data = KaryawanModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('karyawan')
            ->with('success', 'Data Berhasil Diedit');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KaryawanModel::where('id', '=', $id)->delete();
        return redirect('karyawan')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
