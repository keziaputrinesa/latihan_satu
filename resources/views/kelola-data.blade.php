@extends('layout-utama')
@section('konten')
<H1>DATA BUKU</H1>
<button class="tambah-data-btn mt-2" style="background-color:#a8e8f0;" onclick="window.location.href='add_data.php'">+ Tambah Data</button>
<div class="d-flex container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">ID BUKU</th>
                <th scope="col">JUDUL BUKU</th>
                <th scope="col">PENGARANG</th>
                <th scope="col">PENERBIT</th>
                <th scope="col">TAHUN</th>
                <th scope="col">KELOLA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>B0001</td>
                <td>MTK</td>
                <td>ARYO</td>
                <td>UGM</td>
                <td>2015</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>B0002</td>
                <td>JEPANG</td>
                <td>REHAN</td>
                <td>IT</td>
                <td>2017</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>B0003</td>
                <td>INGGRIS</td>
                <td>GANI</td>
                <td>UPI</td>
                <td>2018</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>B0004</td>
                <td>INDO</td>
                <td>RIZKI</td>
                <td>UNESA</td>
                <td>2015</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>B0005</td>
                <td>WEB</td>
                <td>YUDHA</td>
                <td>UM</td>
                <td>2020</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
 </div>
@endsection
