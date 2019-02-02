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
<div class="container mt--8 pb-5" id="printable">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="card bg-secondary shadow border-0">
        <div class="card-body px-lg-5 py-lg-5">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Kode Obat" aria-label="Recipient's username" aria-describedby="basic-addon2" id="kode">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button" style="background: #5e72e4;color:white" id="submit">Submit</button>
            </div>
          </div>
          <fieldset>
              <legend style="font-size:1rem" class="font-weight-bold">Detail Obat</legend>
              <ul class="list-group list-group-flush" id="obat">
                  
              </ul>
          </fieldset>
          <div class="form-group mb-0">
              <h3 class="control-label font-weight-bold">Total</h3>
              <h2 class="text-center">Rp <span id="total">0</span></h2>
              <h3 class="control-label font-weight-bold">Pembayaran</h3>
              <div class="col-auto">
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">Rp</div>
                  </div>
                  <input type="number" class="form-control" id="inlineFormInputGroup">
                </div>
              </div>
          </div>
          <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary my-4" style="float:right" id="btn">Lanjut</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
  var obat = ['Parasetamol','Obat Batuk','Obat Pilek','Antangin'];
  var harga = ['Rp 15.000','Rp 10.000','Rp 13.000','Rp 5.000'];
  var hargaint = [15000,10000,13000,5000];
  var arr = 0;
  var total = 0;

  $('#submit').on('click',function(){
    var kode = $('#kode').val();
    if(kode == ''){
      alert('Kode Tidak Boleh Kosong');
      return;
    }

    if(arr > 3){
      arr = 0;
    }

    var html = '<li class="list-group-item pl-3" style="font-size:.8rem">'+ obat[arr] +' <span style="float:right">'+ harga[arr] +'</span></li>';
    total += hargaint[arr];
    $('#obat').append(html);

    $('#total').html(total);
    arr += 1;
  });

  $("#btn").click(function () {
      //Hide all other elements other than printarea.
      $("#printable").show();
      window.print();
  });
</script>
@endsection