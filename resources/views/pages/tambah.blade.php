@extends('layouts.apps')

@section('content')
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <h3 class="mb-0">Tambah Obat</h3>
      </div>
      <div class="card-body">
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Obat</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
          <div class="col-sm-10 col-auto">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Rp</div>
              </div>
              <input type="number" class="form-control" id="inlineFormInputGroup">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Jenis</label>
          <div class="col-sm-10">
            <select class="form-control">
              <option>Obat Batuk</option>
              <option>Obat Demam</option>
              <option>Lainnya</option>
            </select>
          </div>
        </div>
      </div>
      <div class="card-footer py-4">
        <a class="btn btn-success" href="{{url('farmasi/obat-baru')}}" style="color:white">Simpan</a>
      </div>
    </div>
  </div>
</div>
@endsection