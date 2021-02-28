@extends('layout/main')

@section('title', 'Dashboard Admin')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->
    <div class="card shadow mb-4 col-8 mx-auto">
        <div class="row">
          
            <div class="card-header col-12 bg-white my-1">
                <h3 class="mb-0 d-inline text-primary">Form Edit Data Penerbit</h3>
                <a href="{{ url('penerbit') }}" type="submit" class="btn float-right btn-sm btn-danger" style="width:33px; font-weight:bold;">X</a>
            </div>

            <div class="card-body">
              <form method="post" action="{{ url('penerbit/'.$penerbit->id) }}">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                      <label class="text-dark" for="nama_penerbit">Nama Penerbit</label>
                      <input type="text" class="form-control @error('nama_penerbit') is-invalid @enderror" id="nama_penerbit" 
                      name="nama_penerbit" value="{{old('nama_penerbit', $penerbit->nama_penerbit)}} ">
                      @error('nama_penerbit')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label class="text-dark" for="alamat_penerbit">Alamat Penerbit</label>
                      <textarea type="text" class="form-control  @error('alamat_penerbit') is-invalid @enderror" id="alamat_penerbit" 
                      name="alamat_penerbit">{{old('alamat_penerbit', $penerbit->alamat_penerbit)}}</textarea>
                      @error('alamat_penerbit')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label class="text-dark" for="tlp_penerbit">No Telp Penerbit</label>
                      <input type="text" class="form-control @error('tlp_penerbit') is-invalid @enderror" id="tlp_penerbit" 
                      name="tlp_penerbit" value="{{old('tlp_penerbit', $penerbit->tlp_penerbit)}} ">
                      @error('tlp_penerbit')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                  <button type="submit" class="btn btn-primary col-lg-12">Edit Data!</button>
              </form>
            </div>
          
        </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
@endsection