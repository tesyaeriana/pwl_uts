@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Karyawan</h3>
          </div>
          <div class="card-body">
            <a href="{{url('karyawan/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
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
                @if ($krw->count() > 0)
                  @foreach ($krw as $i => $k)
                    <tr>
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
          </div>
        </div>
    </div>
</section>
    
@endsection