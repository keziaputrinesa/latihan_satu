@extends('layout-Utama')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('konten')
<div class="d-flex container">
<form>
    <H1>TAMBAHKAN BUKU</H1>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">ID NAMA</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">NAMA ANGGOTA</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
     
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">JENIS KELAMIN</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">KELAS</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
       
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">NO HP</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
       
      </div>
    <button type="submit" class="btn btn-primary">SIMPAN</button>
    <button type="submit" class="btn btn-primary">BATAL</button>
 
  </form>
</div>
@endsection








