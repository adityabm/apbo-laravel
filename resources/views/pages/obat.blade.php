@extends('layouts.apps')

@section('content')
<div class="row">
  <div class="col">
    <div class="card shadow">
      <div class="card-header border-0">
        <a class="btn btn-primary btn-sm" style="float: right;color:white" href="{{url('farmasi/tambah-obat')}}"><span class="fa fa-plus"></span> Tambah Obat</a>
        <h3 class="mb-0">Data Obat</h3>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush">
          <thead class="thead-light">
            <tr>
              <th scope="col">Kode Obat</th>
              <th scope="col">Nama Obat</th>
              <th scope="col">Stok</th>
              <th scope="col">Jenis</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">
                #123
              </th>
              <td>
                Parasetamol
              </td>
              <td>
                120 Box
              </td>
              <td>
                Obat Batuk
              </td>
              <td>
                <a href="#"><span class="fa fa-edit"></span> Edit</a><br><br>
                <a href="#"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
            <tr>
              <th scope="row">
                #124
              </th>
              <td>
                Antangin
              </td>
              <td>
                30 Box
              </td>
              <td>
                Lainnya
              </td>
              <td>
                <a href="#"><span class="fa fa-edit"></span> Edit</a><br><br>
                <a href="#"><span class="fa fa-trash"></span> Hapus</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card-footer py-4">
        <nav aria-label="...">
          <ul class="pagination justify-content-end mb-0">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">
                <i class="fas fa-angle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">
                <i class="fas fa-angle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
@endsection