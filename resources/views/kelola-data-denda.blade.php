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
                <th scope="col">TANGGAL PENGEBALIAN</th>
                <th scope="col">DENDA</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>S002</td>
                <td>C++</td>
                <td>PUTRI</td>
                <td>01/FEBRUARI/2023</td>
                <td>08/FEBRUARI/2023</td>
                <td>RP.33.000</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>S001</td>
                <td>MTK</td>
                <td>PUTRA</td>
                <td>01/FEBRUARI/2023</td>
                <td>08/FEBRUARI/2023</td>
                <td>RP.33.000</td>
               
            </tr>
        </tbody>
    </table>
 </div>


 <a href="" class="btn btn-danger"> TOTAL DENDA RP.66.000</a>
 
@endsection