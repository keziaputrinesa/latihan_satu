@extends('layout-utama')
@section('konten')

<div class="position-absolute" style="width: 400px; height: 450px; left: 50%; top: 200px; background-color:aqua ">
    <div id="overlay"></div>

    <div id="popup">
        <p>PRINT</p>
        <button id="closeBtn" onclick="closePopup()">Tutup</button>
        <p>DESTINATIONT</p>
        <p>PAGES</p>
        <p>CEPIES</p>
        <p>LAYOUT</p>
        <p>COLOR</p>
        <p>MOTE DETTING</p>

    </div>
</div>
<H1>DATA ANGGOTA</H1>

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
                <td></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>A0002</td>
                <td>PUTRI</td>
                <td>PEREMPUAN</td>
                <td>12</td>
                <td>081234</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>A0003</td>
                <td>HAMBALI</td>
                <td>LAKI-LAKI</td>
                <td>10</td>
                <td>0812345</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>A0004</td>
                <td>NESA</td>
                <td>PEREMPUAN</td>
                <td>12</td>
                <td>08123456</td>
                <td></td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>A0005</td>
                <td>SIGIT</td>
                <td>LAKI-LAKI</td>
                <td>11</td>
                <td>081234567</td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <script>
        function showPopup() {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("popup").style.display = "block";
        }
    
        function closePopup() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("popup").style.display = "none";
        }
    </script>
    </div>
@endsection
