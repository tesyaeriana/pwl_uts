<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\JadwalModel;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('search')) {
            $jdw = JadwalModel::where('merk','like','%'. request('search').'%')->paginate(5);
        }else{
            $jdw = JadwalModel::paginate(5);
        }
        return view('jadwal')
            ->with('k',$jdw);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_jadwal');
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
            'kode_jadwal' => 'required|string|max:10|unique:jadwal,kode_jadwal',
            'nama_pemilik' => 'required|string|max:25',
            'nama_peliharaan' => 'required|string|max:25',
            'layanan' => 'required|string|max:25',
            'tgl_msk' => 'required|date',
            'tgl_klr' => 'required|date'
        ]);

        $data = JadwalModel::create($request->except(['_token']));
        return redirect('jadwal')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(JadwalModel $jadwal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jadwal = JadwalModel::find($id);
        return view('create_jadwal')
                ->with('jdw', $jadwal)
                ->with('url_form', url('/jadwal/' . $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_jadwal' => 'required|string|max:10|unique:jadwal,kode_jadwal,'.$id,
            'nama_pemilik' => 'required|string|max:25',
            'nama_peliharaan' => 'required|string|max:25',
            'layanan' => 'required|string|max:25',
            'tgl_msk' => 'required|date',
            'tgl_klr' => 'required|date'
        ]);

        $data = JadwalModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('jadwal')
            ->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JadwalModel::where('id', '=', $id)->delete();
        return redirect('jadwal')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
