@extends('layouts.template')

@section('content')
<section class="content">
    <div class="card">
        <div class="card-header border-0">
          <div class="d-flex justify-content-between">
            <h3 class="card-title">Daftar Produk</h3>
          </div>
          <div class="card-body">
            <a href="{{url('produk/create')}}" class="btn -btn sm btn-success my-2">Tambah Data</a>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Produk</th>
                  <th>Nama Produk</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @if ($produk->count() > 0)
                  @foreach ($produk as $i => $k)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$k->kode}}</td>
                      <td>{{$k->nama_produk}}</td>
                      <td>{{$k->kategori_produk}}</td>
                      <td>{{$k->harga}}</td>
                      <td>{{$k->stok}}</td>
                      <td>
                        <a href="{{url('/produk/'. $k->id.'/edit')}}" class="btn btn-sm btn-warning">Edit</a>

                        <form method="POST" action="{{url('/produk/'.$k->id)}}">
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
            Halaman : {{ $produk->currentPage() }} <br/>
	          Jumlah Data : {{ $produk->total() }} <br/>
	          Data Per Halaman : {{ $produk->perPage() }} <br/>
 
            {{ $produk->links() }}
          </div>
        </div>
    </div>
</section>
    
@endsection