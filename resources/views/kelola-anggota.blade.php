@extends('layout-utama')
@section('konten')

<H1>DATA ANGGOTA</H1>
<button class="tambah-data-btn mt-2" style="background-color:#a8f0eb;" onclick="window.location.href='add_data.php'">+ Tambah Data</button>
<div class="d-flex container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">ID ANGGOTA</th>
                <th scope="col">NAMA</th>
                <th scope="col">JENIS KELMAIN</th>
                <th scope="col">KELAS</th>
                <th scope="col">NO HP</th>
                <th scope="col">KELOLA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>A0001</td>
                <td>KEZIA</td>
                <td>PEREMPUAN</td>
                <td>11</td>
                <td>08123</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-danger">Simpan</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>A0002</td>
                <td>PUTRI</td>
                <td>PEREMPUAN</td>
                <td>12</td>
                <td>081234</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-danger">Simpan</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>A0003</td>
                <td>HAMBALI</td>
                <td>LAKI-LAKI</td>
                <td>10</td>
                <td>0812345</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-danger">Simpan</a>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>A0004</td>
                <td>NESA</td>
                <td>PEREMPUAN</td>
                <td>12</td>
                <td>08123456</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-danger">Simpan</a>
                </td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>A0005</td>
                <td>SIGIT</td>
                <td>LAKI-LAKI</td>
                <td>11</td>
                <td>081234567</td>
                <td><a href="" class="btn btn-primary">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                    <a href="" class="btn btn-danger">Simpan</a>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
@endsection
