@extends('layout-Utama')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('konten')
<H1>MASTER DATA</H1>
<div class="d-flex container">
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID BUKU</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">JUDUL BUKU</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
      <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">PENGARANG</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">PENERBIT</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">TAHUN TERBIT</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        <div id="emailHelp" class="form-text"></div>
      </div>
    <button type="submit" class="btn btn-primary">SIMPAN</button>
    <button type="submit" class="btn btn-primary">BATAL</button>
  </form>
  </div>
@endsection








