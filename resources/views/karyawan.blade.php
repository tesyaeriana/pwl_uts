@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title"><b>Daftar Karyawan</b></h3>
          </div>
          <div class="card-body">
            <div class="row d-flex justify-between" style="width: 100%; justify-content: space-between; align-items: center; margin: 0">
              <a href="{{url('karyawan/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
              <form class="form" method="get" action="{{ url('searchKrw') }}" class="col-md-4" style="padding: 0">
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
                  <th>Nama</th>
                  <th>Jabatan</th>
                  <th>Alamat</th>
                  <th>No HP</th>
                  <th>Gaji</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @if ($karyawan->count() > 0)
                  @foreach ($karyawan as $i => $k)
                    <tr>
                      <input type="hidden" class="delete_id" value="{{ $k->id }}">
                      <td>{{++$i}}</td>
                      <td>{{$k->nama}}</td>
                      <td>{{$k->jabatan}}</td>
                      <td>{{$k->alamat}}</td>
                      <td>{{$k->hp}}</td>
                      <td>{{$k->gaji}}</td>
                      <td>
                        <a href="{{url('/karyawan/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                        <form method="POST" action="{{url('/karyawan/'.$k->id)}}">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="7" class="text-center">Data tidak ada</td>
                  </tr>
                @endif
              </tbody>
            </table>
            Halaman : {{ $karyawan->currentPage() }} <br/>
	          Jumlah Data : {{ $karyawan->total() }} <br/>
	          Data Per Halaman : {{ $karyawan->perPage() }} <br/>

            {{ $karyawan->links() }}
          </div>
        </div>
    </div>
</section>
    
@endsection