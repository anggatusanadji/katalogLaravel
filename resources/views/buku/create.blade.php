@extends('layout/main')

@section('title', 'Tambah Buku')

@section('container')

  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->
    <div class="card shadow mb-4 col-10 mx-auto">
        <div class="row">

          <div class="card-header col-12 bg-white my-1">
            <h3 class="mb-0 d-inline text-primary">Form Tambah Data Buku</h3>
            <a href="{{ url('buku') }}" type="submit" class="btn float-right btn-sm btn-danger" style="width:33px; font-weight:bold;">X</a>
          </div>

            <div class="card-body">
              <form method="post" action="{{ url('buku') }}" enctype="multipart/form-data">
              @csrf
  
                <div class="row">
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="kategori_id">Kategori</label>
                      <select name="kategori_id" id="kategori_id" class="form-control  @error('kategori_id') is-invalid @enderror">
                          <option>- Pilih -</option>
                          @foreach($kategori as $ktg)
                              <option value="{{ $ktg->id }}"> {{ $ktg->nama_kategori }} </option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="judul_buku">Judul Buku</label>
                      <input type="text" class="form-control  @error('judul_buku') is-invalid @enderror" id="judul_buku" 
                      placeholder="Masukkan Judul" name="judul_buku" value="{{old('judul_buku')}}">
                      @error('judul_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                  <div class="form-group">
                      <label class="text-dark" for="deskripsi_buku">Deskripsi Buku</label>
                      <textarea type="text" class="form-control  @error('deskripsi_buku') is-invalid @enderror" id="deskripsi_buku" 
                      placeholder="Masukkan Deskripsi" name="deskripsi_buku" value="{{old('deskripsi_buku')}}"></textarea>
                      @error('deskripsi_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                
                <div class="row">
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="penerbit_id">Penerbit</label>
                      <select name="penerbit_id" id="penerbit_id" class="form-control  @error('penerbit_id') is-invalid @enderror">
                          <option>- Pilih -</option>
                          @foreach($penerbit as $pbt)
                              <option value="{{ $pbt->id }}"> {{ $pbt->nama_penerbit }} </option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="penulis_buku">Penulis</label>
                      <input type="text" class="form-control  @error('penulis_buku') is-invalid @enderror" id="penulis_buku" 
                      placeholder="Masukkan Penulis" name="penulis_buku" value="{{old('penulis_buku')}}">
                      @error('penulis_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="jumlah_halaman">Jumlah Halaman</label>
                      <input type="text" class="form-control  @error('jumlah_halaman') is-invalid @enderror" id="jumlah_halaman" 
                      placeholder="Masukkan Jumlah Halaman" name="jumlah_halaman" value="{{old('jumlah_halaman')}}">
                      @error('jumlah_halaman')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>           
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="tahun_terbit">Tahun Terbit</label>
                      <input type="text" class="form-control  @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" 
                      placeholder="Masukkan Tahun Terbit" name="tahun_terbit" value="{{old('tahun_terbit')}}">
                      @error('tahun_terbit')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="harga_buku">Harga Buku</label>
                      <input type="text" class="form-control  @error('harga_buku') is-invalid @enderror" id="harga_buku" 
                      placeholder="Masukkan Harga" name="harga_buku" value="{{old('harga_buku')}}">
                      @error('harga_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <!-- <div class="form-group col-lg-6">
                      <label class="text-dark" for="cover_buku">Cover Buku</label>
                      <input type="text" class="form-control  @error('cover_buku') is-invalid @enderror" id="cover_buku" 
                      placeholder="Masukkan Cover" name="cover_buku" value="{{old('cover_buku')}}">
                      @error('cover_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div> -->
                  <div class="form-group col-lg-6">
					  <label class="text-dark" for="cover_buku">Cover_buku</label>
					  <input type="file" name="cover_buku" class="form-control" id="cover_buku">
				  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="tipe_id">Tipe</label>
                      <select name="tipe_id" id="tipe_id" class="form-control  @error('tipe_id') is-invalid @enderror">
                          <option value>- Pilih -</option>
                          @foreach($tipe as $tpe)
                              <option value="{{ $tpe->id }}">{{ $tpe->tipe_buku }} </option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group col-lg-6">
                    <label class="text-dark" for="status">Status</label>
                    <select name="status" id="status" class="form-control  @error('status') is-invalid @enderror">
                        <option>- Pilih -</option>
                        <option>Tersedia</option>
                        <option>Habis</option>
                    </select>  
                  </div>
                </div>
                
                  <button type="submit" class="btn btn-primary col-lg-12 mt-3">Tambah Data!</button>
              </form>
            </div>
          </div>
      </div>
  </div>
</div>
<!-- End of Main Content -->

@endsection