@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Pelanggan</h3>
          </div>
          <div class="card-body">
            <a href="{{url('pelanggan/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
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
                @if ($plg->count() > 0)
                  @foreach ($plg as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->id_pelanggan}}</td>
                      <td>{{$k->nama_pelanggan}}</td>
                      <td>{{$k->alamat_pelanggan}}</td>
                      <td>{{$k->no_hp}}</td>
                    
                      <td>
                        <a href="{{url('/pelanggan/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                        <form method="POST" action="{{url('/pelanggan/'.$k->id)}}">
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