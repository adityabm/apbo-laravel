@extends('layouts.login')

@section('content')
<div class="header bg-gradient-primary py-4 py-lg-5">
  <div class="container">
    <div class="header-body text-center mb-7">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6">
          <h1 class="text-white">Input Kode Resep</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="separator separator-bottom separator-skew zindex-100">
    <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
      <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>
</div>
<!-- Page content -->
<div class="container mt--8 pb-5">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="card bg-secondary shadow border-0">
        <div class="card-body px-lg-5 py-lg-5">
          <form role="form" method="GET" action="{{url('farmasi/detail-resep/123')}}">
            <div class="form-group mb-3">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-pencil-alt"></i></span>
                </div>
                <input class="form-control" placeholder="Kode Resep" type="text">
              </div>
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-primary my-4">Lanjut</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection