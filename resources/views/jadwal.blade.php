@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
           <h3 class="card-title"><b>Daftar Jadwal</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('jadwal/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
              <form class="form" method="get" action="{{ url('searchJdw') }}" class="col-md-4" style="padding: 0">
                <div class="form-group w-100 mb-3">
                    <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Masukkan keyword">
                    <button type="submit" class="btn btn-primary mb-1">Cari</button>
                </div>
              </form>
            </div>
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
                @if ($jadwal ->count() > 0)
                  @foreach ($jadwal as $i => $k)
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

                        <form method="POST" action="{{url('/jadwal/'.$k->id)}}" onsubmit="return confirm('Yakin hapus data?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="8" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
            <br/>
            Halaman : {{ $jadwal->currentPage() }} <br/>
	          Jumlah Data : {{ $jadwal->total() }} <br/>
	          Data Per Halaman : {{ $jadwal->perPage() }} <br/>
 
            {{ $jadwal->links() }}
          </div>
        </div>
    </div>
</section>
    
@endsection