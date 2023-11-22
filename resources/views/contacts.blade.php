@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Order now</h2>
</div>
<form method="post" action="{{route('contacts.store')}}">
    {{csrf_field()}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
    <label for="inputname" >Nama barang</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama" name="harga">
    <label for="inputname" class="form-label">Harga jual</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan Pesan Disini" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
    <label for="floatingTextarea2">Alamat tujuan</label>
  </div>
  <button type="submit" class="btn btn-primary">kirim</button>
</form>
@endsection 