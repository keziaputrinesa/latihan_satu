@extends('layout-utama')
@section('konten')
<H1>DATA BUKU</H1>
<button class="tambah-data-btn mt-2" style="background-color:rgb(168, 234, 240);" onclick="window.location.href='add_data.php'">+ Tambah Data</button>
<div class="d-flex container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">ID SKL</th>
                <th scope="col"> BUKU</th>
                <th scope="col">PEMINJAM</th>
                <th scope="col">TANGGAL PINJAM</th>
                <th scope="col">JATUH TEMPO</th>
                <th scope="col">DENDA</th>
                <th scope="col">KELOLA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>S003</td>
                <td>RPL2</td>
                <td>A0005-ZIA</td>
                <td>17/AGUSTUS/2022</td>
                <td>27/AGUSTUS/2022</td>
                <td>RP.15000 TERLAMBAT: 19 HARI</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
 </div>


 <a href="" class="btn btn-danger"> NOTE 

    MASA PEMINJAMAN BUKU ADALAH 7 HARI DARI TANGGAL PEMINJAMAN .
    
    JIKA BUKU DI KEMBALIKAN LEBIH DARI MASAPEMINJAMAN,MAKA AKAN DIKENAKAN DENDA
    
     SEBESAR RP 1.000/HARI</a>
 
@endsection