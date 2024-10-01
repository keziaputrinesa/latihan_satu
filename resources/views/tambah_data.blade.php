@extends('layout-utama')

@section('konten')
<h3 class="text-center">Tambah Data</h3>
<a href="/" class="tambah-data-btn mt-2" style="background-color:#87e4c8;" onclick="window.location.href='add_data.php'">+ Tambah Buku</button>
<form>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Kode Buku</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">

        <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Penerbit</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <th style="border: 1px solid black;"><a href="" class="btn btn-primary">Simpan</a>
        <a href="" class="btn btn-danger">Batal</a></th>
    </tr>
  </form>
@endsection