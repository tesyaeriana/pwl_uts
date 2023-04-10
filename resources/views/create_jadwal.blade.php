@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Jadwal</h3>
            <br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{$url_form }}">
                @csrf
                {!! (isset($jdw))? method_field('PUT'):''!!}
                <div class="form-group">
                  <label>Kode Jadwal</label>
                  <input class="form-control @error('kode_jadwal') is-invalid @enderror" value="{{isset($jdw)? $jdw->kode_jadwal : old('kode_jadwal') }}" name="kode_jadwal" type="text" />
                  @error('kode_jadwal')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama Pemilik</label>
                  <input class="form-control @error('nama_pemilik') is-invalid @enderror" value="{{isset($jdw)? $jdw->nama_pemilik : old('nama_pemilik') }}" name="nama_pemilik" type="text"/>
                  @error('nama_pemilik')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama Peliharaan</label>
                  <input class="form-control @error('nama_peliharaan') is-invalid @enderror" value="{{isset($jdw)? $jdw->nama_peliharaan : old('nama_peliharaan') }}" name="nama_peliharaan" type="text"/>
                  @error('nama_peliharaan')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Layanan</label>
                  <input class="form-control @error('layanan') is-invalid @enderror" value="{{isset($jdw)? $jdw->layanan : old('layanan') }}" name="layanan" type="text"/>
                  @error('layanan')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input class="form-control @error('tgl_msk') is-invalid @enderror" value="{{isset($jdw)? $jdw->tgl_msk : old('tgl_msk') }}" name="tgl_msk" type="text"/>
                  @error('tgl_msk')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Tanggal Keluar</label>
                  <input class="form-control @error('tgl_klr') is-invalid @enderror" value="{{isset($jdw)? $jdw->tgl_klr : old('tgl_klr') }}" name="tgl_klr" type="text"/>
                  @error('tgl_klr')
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