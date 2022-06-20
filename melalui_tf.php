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
        @media only screen and (max-width: 900px) {
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
        METODE PEMBAYARAN TRANSFER
    </div>
    
    <div class="baris">
        <div class="left">
            <img src="asset/img/login.JPG" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Calon siswa login ke halaman website PPDB SMK Global Cendekia.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/rincian_bayar.JPG" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Calon siswa mengecek Rincian Pembayaran yang wajib di bayarkan saat mendaftar. Klik menu <b>Cek Status Pembayaran</b>.
Pembayaran dapat dilakukan secara bertahap atau diangsur.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/atm.jpg" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Lakukan pembayaran melalui Transfer ke BNI Syariah dengan No. Rekening : <b style="font-weight:600;">1181638040</b> atas nama SMK Global Cendekia</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/bukti_tf.jpg" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Foto, Cetak, atau Screenshoot Resi atau bukti Transfer</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/upload_bayar.JPG" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Upload Bukti Transfer di Metode Pembayaran - Cek Status Pembayaran - Upload Bukti Bayar.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/cuser.jpg" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Setelah melakukan Upload Bukti Bayar, silahkan konfirmasi ke bagian keuangan SMK Global Cendekia untuk di lakukan verifikasi.<br>
                <a href="https://wa.me/+6287785600433?text=Halo admin keuangan SMK Global Cendekia. Saya Pendaftar PPDB online. Saya ingin konfirmasi bahwa *saya telah melakukan Pembayaran PPDB secara Transfer.* Bukti transfer sudah saya Upload. Mohon segera dilakukan verifikasi dan pembaharuan data Pembayaran saya. Terimakasih."><button class="btn-primary" style="border-radius: 5px; border-collapse:collapse;">Klik untuk konfirmasi</button></a><br>
                Proses Verifikasi Pembayaran akan dilakukan paling lama 1 x 24 Jam.</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/konfirmasi.jpg" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Setelah 1 x 24 Jam, silahkan Cek Riwayat Pembayaran apakah data yang dibayarkan sudah muncul atau belum.
                Jika dalam 1 x 24 jam data yang dibayarkan belum muncul, silahkan hubungi bagian keuangan.<br>
                <a href="https://wa.me/+6287785600433?text=Halo admin keuangan SMK Global Cendekia. Saya Pendaftar PPDB online. Saya ingin konfirmasi bahwa *data yang telah saya bayar belum ada di Halaman Riwayat Pembayaran.* Mohon segera dilakukan pengecekan dan pembaharuan data Pembayaran saya. Terimakasih."><button class="btn-primary" style="border-radius: 5px; border-collapse:collapse;">Klik untuk hubungi</button></a><br></p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/cetak_bayar.JPG" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Jika data yang dibayarkan sudah muncul di Riwayat Pembayaran maka, Cetak Riwayat Pembayaran dan simpan.</p></li>
            </ul>
        </div>
    </div>

    <div class="baris">
        <div class="left">
            <img src="asset/img/gedung.JPG" alt="">
        </div>
        <div class="right">
            <ul>
                <li><p>Datang ke bagian PPDB SMK Global Cendekia di Jl. Raya Bekasi Km.23 No.37
                Kel. Cakung Barat, Kec. Cakung - Jakarta Timur untuk melakukan Daftar Ulang.<br>
                Bawa Bukti Pendaftaran dan Bukti Riwayat Pembayaran.</p></li>
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