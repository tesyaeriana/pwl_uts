@extends ('layouts.template')

@section('content')
<section class="content">

    <!-- Default Box-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> Data Pelanggan</h3>
            <br>
        </div>
        <div class="card-body">
            <form method="POST" action="{{$url_form }}">
                @csrf
                {!! (isset($plg))? method_field('PUT'):''!!}
                <div class="form-group">
                  <label>Id</label>
                  <input class="form-control @error('id_pelanggan') is-invalid @enderror" value="{{isset($plg)? $plg->kode : old('id_pelanggan') }}" name="id_pelanggan" type="text" />
                  @error('id_pelanggan')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input class="form-control @error('nama_pelanggan') is-invalid @enderror" value="{{isset($plg)? $plg->nama_pelanggan : old('nama_pelanggan') }}" name="nama_pelanggan" type="text"/>
                  @error('nama_pelanggan')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input class="form-control @error('alamat_pelangan') is-invalid @enderror" value="{{isset($plg)? $plg->alamat_pelangan : old('alamat_pelangan') }}" name="alamat_pelangan" type="text"/>
                  @error('alamat_pelangan')
                    <span class="error invalid-feedback">{{ $message }} </span>
                  @enderror
                </div>
                <div class="form-group">
                  <label>No_Hp</label>
                  <input class="form-control @error('no_hp') is-invalid @enderror" value="{{isset($plg)? $plg->no_hp : old('no_hp') }}" name="no_hp" type="text"/>
                  @error('no_hp')
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