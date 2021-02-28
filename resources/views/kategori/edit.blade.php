@extends('layout/main')

@section('title', 'Dashboard Admin')

@section('container')
<!-- Begin Page Content -->
  <div class="container-fluid">
    
    <!-- Content Row -->
    <div class="card shadow mb-4 col-8 mx-auto">
      <div class="row">
          
            <div class="card-header col-12 bg-white my-1">
                <h3 class="mb-0 d-inline text-primary">Form Edit Data Kategori</h3>
                <a href="{{ url('kategori') }}" type="submit" class="btn float-right btn-sm btn-danger" style="width:33px; font-weight:bold;">X</a>
            </div>
              
            <div class="card-body">
              <form method="post" action="{{ url('kategori/'.$kategori->id) }}">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                      <label class="text-dark" for="nama_kategori">Nama Kategori</label>
                      <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror" id="nama_kategori" 
                      name="nama_kategori" value="{{old('nama_kategori', $kategori->nama_kategori)}} ">
                      @error('nama_kategori')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group">
                      <label class="text-dark" for="deskripsi_kategori">Deskripsi Kategori</label>
                      <textarea type="text" class="form-control  @error('deskripsi_kategori') is-invalid @enderror" id="deskripsi_kategori" 
                      name="deskripsi_kategori">{{old('deskripsi_kategori', $kategori->deskripsi_kategori)}}</textarea>
                      @error('deskripsi_kategori')
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