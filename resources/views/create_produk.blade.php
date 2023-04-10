@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Produk</h3>
            <br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{$url_form }}">
                @csrf
                {!! (isset($prd))? method_field('PUT'):''!!}
                <div class="form-group">
                  <label>Kode Produk</label>
                  <input class="form-control @error('kode') is-invalid @enderror" value="{{isset($prd)? $prd->kode : old('kode') }}" name="kode" type="text" />
                  @error('kode')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input class="form-control @error('nama_produk') is-invalid @enderror" value="{{isset($prd)? $prd->nama_produk : old('nama_produk') }}" name="nama_produk" type="text"/>
                  @error('nama_produk')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Kategori Produk</label>
                  <input class="form-control @error('kategori_produk') is-invalid @enderror" value="{{isset($prd)? $prd->kategori_produk : old('kategori_produk') }}" name="kategori_produk" type="text"/>
                  @error('kategori_produk')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Harga</label>
                  <input class="form-control @error('harga') is-invalid @enderror" value="{{isset($prd)? $prd->harga : old('harga') }}" name="harga" type="text"/>
                  @error('harga')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Stok</label>
                  <input class="form-control @error('stok') is-invalid @enderror" value="{{isset($prd)? $prd->stok : old('stok') }}" name="stok" type="text"/>
                  @error('stok')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <button class="btn btn-sm btn-primary">Simpan</button>
                </div>
              </form>
      
        </div>
    </div>
</section>
@endsection