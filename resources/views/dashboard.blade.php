@extends('layout/main')

@section('title', 'Dashboard Admin')

@section('container')
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Katalog Buku</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline">Jumlah Data : {{$jumlah_buku}}</div>
            </div>
            <div class="col-auto">
              <i class="fa fa-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="{{url('buku')}}" class="text-decoration-none">
          <div class="card-footer">
            <span>View Details</span>
            <span style="float:right"><i class="fa fa-arrow-circle-right"></i></span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kategori</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline">Jumlah Data : {{$jumlah_kategori}}</div>
            </div>
            <div class="col-auto">
              <i class="fa fa-th-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="{{url('kategori')}}" class="text-decoration-none">
          <div class="card-footer">
            <span class="text-success">View Details</span>
            <span style="float:right"><i class="fa fa-arrow-circle-right text-success"></i></span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Penerbit</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline">Jumlah Data : {{$jumlah_penerbit}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="{{url('penerbit')}}" class="text-decoration-none">
          <div class="card-footer">
            <span class="text-info">View Details</span>
            <span style="float:right"><i class="fa fa-arrow-circle-right text-info"></i></span>
          </div>
        </a>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800 d-inline">Jumlah Data : {{$jumlah_admin}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-card fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
        <a href="{{url('admin')}}" class="text-decoration-none">
          <div class="card-footer">
            <span class="text-warning">View Details</span>
            <span style="float:right"><i class="fa fa-arrow-circle-right text-warning"></i></span>
          </div>
        </a>
      </div>
    </div>

    </div>
  </div>

</div>
@endsection