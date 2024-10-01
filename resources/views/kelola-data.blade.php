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
                <th scope="col">NO BUKU</th>
                <th scope="col">JUDUL BUKU</th>
                <th scope="col">PENERBIT</th>
                <th scope="col">TAHUN</th>
                <th scope="col">KELOLA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>;
                <td>B0001</td>
                <td>897635</td>
                <td>BERDAMAI</td>
                <td>PSIKOLOGI CORNER</td>
                <td>2020</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>B0002</td>
                <td>87635</td>
                <td>SI ANAK PINTAR</td>
                <td>MUTIAHIA SAYEKTI</td>
                <td>2018</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>B0003</td>
                <td>989653</td>
                <td>GADIS DARI GALAKSI</td>
                <td>POOPI</td>
                <td>2018</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>B0004</td>
                <td>INDO</td>
                <td>MAJAPAHIT</td>
                <td>DHEWIBERTA</td>
                <td>2018</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            
        </tbody>
    </table>
 </div>
@endsection
