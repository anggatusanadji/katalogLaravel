@extends('layout/main')

@section('title', 'Dashboard Admin')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->

    <div class="card col-12 mx-auto mb-4">
        <div class="row">
            <div class="card-header col-12 bg-white">
                <h3 class="mb-0 d-inline text-primary">Detail Buku</h3>
                <a href="{{ url('buku') }}" type="submit" class="btn float-right btn-sm btn-danger" style="width:33px; font-weight:bold;">X</a>
            </div>

            <div class="card-header text-center bg-white mx-auto py-4" style="width:100%">
                <div class="card mx-auto py-2">
                    <img src="{{ asset('img/buku/'.$buku->cover_buku) }}" width="250px" class="mx-auto mt-3 mb-3 rounded-lg">
                    <h4>{{ $buku->judul_buku}}</h4>
                </div>
            </div>

            <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th width="120px">Kategori</th>
                    <td>{{ $buku->kategori->nama_kategori }}</td>
                    </tr>
                    <tr>
                    <th>Deskripsi Buku</th>
                    <td>{{ $buku->deskripsi_buku }}</td>
                    </tr>
                    <tr>
                    <th>Penerbit</th>
                    <td>{{ $buku->penerbit->nama_penerbit }}</td>
                    </tr>
                    <tr>
                    <th>Penulis</th>
                    <td>{{ $buku->penulis_buku }}</td>
                    </tr>
                    <tr>
                    <th>Jumlah Halaman</th>
                    <td>{{ $buku->jumlah_halaman }}</td>
                    </tr>
                    <tr>
                    <th>Tahun Terbit</th>
                    <td>{{ $buku->tahun_terbit }}</td>
                    </tr>
                    <tr>
                    <th>Harga Buku</th>
                    <td>{{ $buku->harga_buku }}</td>
                    </tr>
                    <tr>
                    <th>Tipe Buku</th>
                    <td>{{ $buku->tipe->tipe_buku }}</td>
                    </tr>
                    <tr>
                    <th>Status</th>
                    <td>{{ $buku->status }}</td>
                    </tr>
                </thead>
            </table> 
            </div>
        </div>
    </div>
  </div>

</div>
@endsection