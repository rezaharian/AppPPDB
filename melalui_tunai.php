<?php
            session_start();
            if(!isset($_SESSION ['nik'])){
            header ('location: index.php');
            }
            ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container1{
            padding: 120px 125px;
            background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png);
            background-repeat: no-repeat;
            background-size:cover
        }
        .container1 .judul{
            color: white;
            font-size: 1.8rem;
            letter-spacing: 1px;
            margin-bottom: 50px;
            margin-left: 100px;
        }
        
        .container1 .baris{
            display: flex;
            background-color: rgba(225, 225, 225, 0.8);
            box-shadow: 2px 2px 5px 0px;
            padding: 10px;
            border-radius: 10px;
            width: 80%;
            margin-left: 100px;
            margin-bottom: 30px;
        }
        .baris .left img{
            width: 350px;
            border-radius: 10px;
        }
        .baris .right p{
            color: black;
            font-size: 20px;
            letter-spacing: 1px;
            word-spacing: 2px;
        }
        @media only screen and (max-width: 800px) {
            .container1{
                padding: 85px 0px;
            }
            .container1 .judul{
                margin-left: 10px;
            }
            .container1 .baris{
                display: block;
                width: 90%;
                margin-left: 20px;
            }
            .baris .left img{
                width: 280px;
                border-radius: 10px;
                float: right;
                margin-bottom: 20px;
            }
        }
    </style>
    <title>Document</title>
</head>
<body>
    
<!-- coding header -->
<?php
    include 'header_siswa.php'
?>
<!-- coding header -->


<!-- coding konten utama -->
<div class="container1">
    <div class="judul">
        METODE PEMBAYARAN TUNAI
    </div>
    
    <div class="baris">
        <div class="left">
            <img src="asset/img/bukti_pendaftaran.JPG" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Orang tua/ Wali/ Calon siswa mengunduh atau mencetak Bukti Pendaftaran Online di website PPDB SMK Global Cendekia.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/gedung.JPG" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Orang tua/ Wali/ Calon siswa datang ke bagian keuangan SMK Global Cendekia di alamat Jl. Raya Bekasi Km.23 No.37
                    Kel. Cakung Barat, Kec. Cakung - Jakarta Timur.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/verifikasi_data.jpg" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Orang tua/ Wali/ Calon siswa menyerahkan atau memperlihatkan Bukti Pendaftaran Online kepada Panitia PPDB
                    yang selanjutnya akan diverifikasi oleh Panitia PPDB.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/pembayaran_tunai.jpg" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Orang tua/ Wali/ Calon siswa melakukan pembayaran secara tunai di bagian keuangan.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/bukti_bayar.jpg" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Bagian Keuangan sekolah memberikan Kwitansi Bukti Pembayaran yang selanjutnya harus di simpan oleh
                    Orang tua/ Wali/ Calon siswa.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/agenda.jpg" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Selamat! siswa telah resmi menjadi Peserta Didik Baru SMK Global Cendekia. Selanjutnya, Paniti PPDB akan memberikan
                       informasi terkait jadwal kegiatan/agenda pelaksanaan Masa Pengenalan Lingkungan Sekolah.</p></li>
            </ul>
        </div>
    </div>
</div>
<!-- coding konten utama -->


<!-- coding footer -->
<?php
    include 'footer_umum.php'
?>
<!-- coding footer -->



</body>
</html>