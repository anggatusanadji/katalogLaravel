@extends('layout/main')

@section('title', 'Dashboard Admin')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->
    
    <!-- ini tambah data -->         
    <a href="{{ url('buku/create') }}" class="btn btn-primary my-3"><i class="fas fa-plus-square"></i> Tambah Data Buku</a> 

    <!-- Flash -->
    @if(session()->get('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session()->get('status') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif

      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary" style="display:inline;">Data Buku</h6>
        </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" cellspacing="0">
                <thead>
                  <tr class="text-center">                        
                      <th scope="col">#</th>
                      <th scope="col">Kategori</th>
                      <th scope="col">Judul Buku</th>
                      <th scope="col">Penulis</th>
                      <th scope="col">Cover Buku</th>
                      <th scope="col" width="120px">Aksi</th>
                  </tr>
                </thead>
              <tbody>
                  @foreach($buku as $bku)
                  <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $bku->kategori->nama_kategori }}</td>
                      <td>{{ $bku->judul_buku }}</td>
                      <td>{{ $bku->penulis_buku }}</td>
                      <td><img src="{{ asset('img/buku/'.$bku->cover_buku) }}" width="100px"></td>
                      <!-- <td>{{ $bku->cover_buku }}</td> -->
                      <td class="text-center">  
                        <a href="/buku/{{ $bku->id }}" class="btn btn-info">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="{{ url('buku/'.$bku->id.'/edit') }}" type="button" class="btn btn-primary">
                          <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ url('buku/'.$bku->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin hapus data?')">
                          @method('delete')
                          @csrf
                          <button type="submit" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
              </table>
            </div>
          </div>
      </div> 
  </div>
</div>
<!-- End of Main Content -->
@endsection