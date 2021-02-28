@extends('layout/main')

@section('title', 'Dashboard Admin')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->
    
    <!-- ini tambah data -->
    
    <a href="{{ url('penerbit/create') }}" class="btn btn-primary my-3"><i class="fas fa-plus-square"></i> Tambah Data Penerbit</a> 

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
          <h6 class="m-0 font-weight-bold text-primary">Data Penerbit Buku</h6>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>                        
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Alamat</th>
                      <th scope="col" width="115px">No Telepon</th>
                      <th scope="col">Aksi</th>
                  </tr>
                </thead>
              <tbody>
                  @foreach($penerbit as $pbt)
                  <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $pbt->nama_penerbit }}</td>
                      <td>{{ $pbt->alamat_penerbit }}</td>
                      <td>{{ $pbt->tlp_penerbit }}</td>
                      <td class="text-center">
                        <a href="{{ url('penerbit/'.$pbt->id.'/edit') }}" type="button" class="btn btn-primary">
                          <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ url('penerbit/'.$pbt->id) }}" method="post" class="d-inline" onsubmit="return confirm('Anda Yakin Ingin Menghapus Penerbit {{$pbt->nama_penerbit}}?')">
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
@endsection