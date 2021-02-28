@extends('layout/main')

@section('title', 'Dashboard Admin')

@section('container')
<!-- Begin Page Content -->
  <div class="container-fluid">
    
    <!-- Content Row -->
    <div class="card shadow mb-4 col-10 mx-auto">
      <div class="row">
          
            <div class="card-header col-12 bg-white my-1">
                <h3 class="mb-0 d-inline text-primary">Form Edit Data Buku</h3>
                <a href="{{ url('buku') }}" type="submit" class="btn float-right btn-sm btn-danger" style="width:33px; font-weight:bold;">X</a>
            </div>
              
            <div class="card-body">
              <form method="post" action="{{ url('buku/'.$buku->id) }}">
                  @method('PUT')
                  @csrf

                  <div class="row">
                  <?php $selectedkategori=$buku['kategori_id'] ?>
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="kategori_id">Kategori</label>
                      <select name="kategori_id" id="kategori_id" class="form-control  @error('kategori_id') is-invalid @enderror">
                          <option disabled>- Pilih -</option>
                          @foreach($kategori as $ktg)
                              <option value="{{ $ktg->id }}" {{ $selectedkategori == $ktg->id ? 
                              'selected="selected"' : '' }}> {{ $ktg->nama_kategori }} </option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="judul_buku">Judul Buku</label>
                      <input type="text" class="form-control  @error('judul_buku') is-invalid @enderror" id="judul_buku" 
                      placeholder="Masukkan Judul" name="judul_buku" value="{{old('judul_buku', $buku->judul_buku)}}">
                      @error('judul_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                  <div class="form-group">
                      <label class="text-dark" for="deskripsi_buku">Deskripsi Buku</label>
                      <textarea type="text" class="form-control  @error('deskripsi_buku') is-invalid @enderror" id="deskripsi_buku" 
                      placeholder="Masukkan Deskripsi" name="deskripsi_buku">{{old('deskripsi_buku', $buku->deskripsi_buku)}}</textarea>
                      @error('deskripsi_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>

                <div class="row">
                  <?php $selectedpenerbit=$buku['penerbit_id'] ?>
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="penerbit_id">Penerbit</label>
                      <select name="penerbit_id" id="penerbit_id" class="form-control  @error('penerbit_id') is-invalid @enderror">
                          <option disabled>- Pilih -</option>
                          @foreach($penerbit as $pbt)
                              <option value="{{ $pbt->id }}"  {{ $selectedpenerbit == $pbt->id ? 'selected="selected"' : '' }}> {{ $pbt->nama_penerbit }} </option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="penulis_buku">Penulis</label>
                      <input type="text" class="form-control  @error('penulis_buku') is-invalid @enderror" id="penulis_buku" 
                      placeholder="Masukkan Penulis" name="penulis_buku" value="{{old('penulis_buku', $buku->penulis_buku)}}">
                      @error('penulis_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="jumlah_halaman">Jumlah Halaman</label>
                      <input type="text" class="form-control  @error('jumlah_halaman') is-invalid @enderror" id="jumlah_halaman" 
                      placeholder="Masukkan Jumlah Halaman" name="jumlah_halaman" value="{{old('jumlah_halaman', $buku->jumlah_halaman)}}">
                      @error('jumlah_halaman')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>           
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="tahun_terbit">Tahun Terbit</label>
                      <input type="text" class="form-control  @error('tahun_terbit') is-invalid @enderror" id="tahun_terbit" 
                      placeholder="Masukkan Tahun Terbit" name="tahun_terbit" value="{{old('tahun_terbit', $buku->tahun_terbit)}}">
                      @error('tahun_terbit')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="harga_buku">Harga Buku</label>
                      <input type="text" class="form-control  @error('harga_buku') is-invalid @enderror" id="harga_buku" 
                      placeholder="Masukkan Harga" name="harga_buku" value="{{old('harga_buku', $buku->harga_buku)}}">
                      @error('harga_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="cover_buku">Cover Buku</label>
                      <input type="text" class="form-control  @error('cover_buku') is-invalid @enderror" id="cover_buku" 
                      placeholder="Masukkan Cover" name="cover_buku" value="{{old('cover_buku', $buku->cover_buku)}}">
                      @error('cover_buku')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                  </div>
                  <!-- <div class="form-group col-lg-6">
					  <label class="text-dark" for="cover_buku">Cover_buku</label>
					  <input type="file" name="cover_buku" class="form-control" id="cover_buku">
				  </div> -->
                </div>

                <div class="row">
                  <?php $selectedtipe=$buku['tipe_id'] ?>
                  <div class="form-group col-lg-6">
                      <label class="text-dark" for="tipe_id">Tipe</label>
                      <select name="tipe_id" id="tipe_id" class="form-control  @error('tipe_id') is-invalid @enderror">
                          <option disabled>- Pilih -</option>
                          @foreach($tipe as $tpe)
                              <option value="{{ $tpe->id }}"  {{ $selectedtipe == $tpe->id ? 'selected="selected"' : '' }}>{{ $tpe->tipe_buku }} </option>
                          @endforeach
                      </select>
                  </div>
                  <?php $selectedstatus=$buku->status ?>
                  <div class="form-group col-lg-6">
                    <label class="text-dark" for="status">Status</label>
                    <select name="status" id="status" class="form-control  @error('status') is-invalid @enderror" {{ $selectedtipe == $buku->status ? 'selected="selected"' : '' }}>
                        <option disabled>- Pilih -</option>
                        <option value='Tersedia' <?php if($selectedstatus == 'Tersedia'){echo "selected"; } ?> >Tersedia</option>
                        <option value='Habis' <?php if($selectedstatus == 'Habis'){echo "selected"; } ?> >Habis</option>
                    </select>  
                  </div>
                </div>
                <button type="submit" class="btn btn-primary col-lg-12 mt-3">Edit Data!</button>
              </form>
              </div>
          
      </div>
    </div>
  </div>
</div>
<!-- End of Main Content -->
@endsection