@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Jadwal</h3>
          </div>
          <div class="card-body">
            <a href="{{url('jadwal/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Jadwal</th>
                  <th>Nama Pemilik</th>
                  <th>Nama Peliharaan</th>
                  <th>Layanan</th>
                  <th>Tanggal Masuk</th>
                  <th>Tanggal Keluar</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @if ($jdw->count() > 0)
                  @foreach ($jdw as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->kode_jadwal}}</td>
                      <td>{{$k->nama_pemilik}}</td>
                      <td>{{$k->nama_peliharaan}}</td>
                      <td>{{$k->layanan}}</td>
                      <td>{{$k->tgl_msk}}</td>
                      <td>{{$k->tgl_klr}}</td>
                      <td>
                        <a href="{{url('/jadwal/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                        <form method="POST" action="{{url('/jadwal/'.$k->id)}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="6" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
          </div>
        </div>
    </div>
</section>
    
@endsection