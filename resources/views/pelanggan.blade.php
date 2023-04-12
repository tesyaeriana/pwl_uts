@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title"><b>Daftar Pelanggan</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('pelanggan/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
              <form class="form" method="get" action="{{ url('searchPlg') }}" class="col-md-4" style="padding: 0">
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
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @if ($pelanggan->count() > 0)
                  @foreach ($pelanggan as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_pelanggan}}</td>
                      <td>{{$k->nama_pelanggan}}</td>
                      <td>{{$k->alamat_pelanggan}}</td>
                      <td>{{$k->no_hp}}</td>
                    
                      <td>
                        <a href="{{url('/pelanggan/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                        <form method="POST" action="{{url('/pelanggan/'.$k->id)}} " onsubmit="return confirm('Yakin hapus data?')">
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
            Halaman : {{ $pelanggan->currentPage() }} <br/>
	          Jumlah Data : {{ $pelanggan->total() }} <br/>
	          Data Per Halaman : {{ $pelanggan->perPage() }} <br/>
 
            {{ $pelanggan->links() }}
          </div>
        </div>
    </div>
</section>
    
@endsection