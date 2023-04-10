@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Karyawan</h3>
            <br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{$url_form }}">
                @csrf
                {!! (isset($krw))? method_field('PUT'):''!!}
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control @error('nama') is-invalid @enderror" value="{{isset($krw)? $krw->nama : old('nama') }}" name="nama" type="text" />
                  @error('nama')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Jabatan</label>
                  <input class="form-control @error('jabatan') is-invalid @enderror" value="{{isset($krw)? $krw->jabatan : old('jabatan') }}" name="jabatan" type="text"/>
                  @error('jabatan')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input class="form-control @error('alamat') is-invalid @enderror" value="{{isset($krw)? $krw->alamat : old('alamat') }}" name="alamat" type="text"/>
                  @error('alamat')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>No HP</label>
                  <input class="form-control @error('hp') is-invalid @enderror" value="{{isset($krw)? $krw->hp : old('hp') }}" name="hp" type="text"/>
                  @error('hp')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Gaji</label>
                  <input class="form-control @error('gaji') is-invalid @enderror" value="{{isset($krw)? $krw->gaji : old('gaji') }}" name="gaji" type="text"/>
                  @error('gaji')
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