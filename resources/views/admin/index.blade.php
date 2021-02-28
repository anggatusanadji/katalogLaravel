@extends('layout/main')

@section('title', 'Dashboard Admin')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->
    
    <!-- ini tambah data          -->
    <!-- <a href="{{ url('kategori/create') }}" class="btn btn-primary my-3"><i class="fas fa-plus-square"></i> Tambah Data Kategori</a>  -->

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
          <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
        </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>                        
                      <th scope="col">#</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Username</th>
                      <th scope="col">Email</th>
                  </tr>
                </thead>
              <tbody>
                  @foreach($admin as $adm)
                  <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $adm->name }}</td>
                      <td>{{ $adm->username }}</td>
                      <td>{{ $adm->email }}</td>
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