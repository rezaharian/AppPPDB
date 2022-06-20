<?php
        ob_start();
        session_start();
            if(!isset($_SESSION['nik'])){
                die("<br><br><br><br><br><b>Oops!</b> Access Failed.
                    <p>Sistem Logout. Anda harus melakukan Login kembali.</p>
                    <button type='button' onclick=location.href='./'>Back</button>");

            }
                include "koneksi.php";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        button{
            background-color: yellowgreen;
            text-align: center;
            padding: 10px;
            width: 100%;
            height: 50px;
            color: black;
            font-size: 30px;
            margin-bottom: 30px;
            border-radius: 30px;
            cursor: pointer;
        }
        header{
            width: 100%;
        }
        header img{
            width: 100%;
        }
        .konten-utama{
            width: 80%;
            margin: auto;
        }
        .konten-utama .judul{
            text-align: center;
            font-size: 25px;
            font-weight: 600;
            margin-top: 10px;
            margin-bottom: 20px;
            word-spacing: 2px;
            letter-spacing: 1px;
        }
        
        h4{
            font-size: 20px;
        }
        @media only print {
            button{
                display: none;
            }
        }
    </style>
    <title>Document</title>
</head>
<body>

    <?php
            $tampilPeg=mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
            $peg=mysqli_fetch_array($tampilPeg);
    ?>
    <div>
        <a href="halaman_siswa_baru.php"><button>Kembali ke Home</button></a>
    </div>

    <header>
        <img src="header.jpg" alt="">
    </header>
    <div class="konten-utama">
        <div class="judul">
            TANDA BUKTI PENDAFTARAN<br>PPDB ONLINE 2021/2022
        </div>
        <table width="60%" height="60px">
            <div class="nomor">
                <tr>
                    <td >Nomor Pendaftaran</td>
                    <td >:</td>
                    <td >210<?=$peg['id_pendaftar']?></td>
                </tr>
                <tr>
                    <td>Tanggal Pendaftaran</td>
                    <td>:</td>
                    <td><?=$peg['upload_foto']?>
                    </td>
                </tr>
            </div>
        </table>
        <div><h4>Data yang terdaftar :</h4></div>
        <table width="100%">
            <div class="data">
                <tr>
                    <td width="35%"  height="30px">NIK</td>
                    <td width="5%">:</td>
                    <td width="55%"><?=$peg['nik']?></td>
                </tr>
                <tr>
                    <td height="30px">Nama</td>
                    <td>:</td>
                    <td><?=$peg['nama']?></td>
                </tr>
                <tr>
                    <td height="30px">Alamat</td>
                    <td>:</td>
                    <td><?=$peg['alamat_siswa']?></td>
                </tr>
                <tr>
                    <td height="30px">Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td><?=$peg['tempat_lahir']?>, <?=$peg['tanggal_lahir']?></td>
                </tr>
                <tr>
                    <td height="30px">Jenis Kelamin</td>
                    <td>:</td>
                    <td><?=$peg['j_k']?></td>
                </tr>
                <tr>
                    <td height="30px">Asal Sekolah</td>
                    <td>:</td>
                    <td><?=$peg['asal_sekolah']?></td>
                </tr>
                <tr>
                    <td height="30px">No. Telepon</td>
                    <td>:</td>
                    <td><?=$peg['no_hp_siswa']?></td>
                </tr>
                <tr>
                    <td height="30px">Jurusan yang dipilih</td>
                    <td>:</td>
                    <td><?=$peg['jurusan']?></td>
                </tr>
            </div>
        </table><br>
        <table width="100%">
            <tr>
                <td width="65%" height="30px"></td>
                <td>Jakarta, 
                <?php
                            date_default_timezone_set('Asia/Jakarta');
                            echo " " . date('d F Y'); 
                        ?>
                </td>
            </tr>
            <tr>
                <td height="30px">Ketua Panitia PPDB 2021/2022</td>
                <td>Calon Siswa Baru</td>
            </tr>
            <tr>
                <td height="60px"><img style="width: 120px; margin-left: 5%" src="asset/img/ttd.png" alt=""></td>
                <td></td>
            </tr>
            <tr>
                <td height="30px">Retnowati, S.Pd.</td>
                <td><?=$peg['nama']?></td>
            </tr>
        </table><br>
        <table width="100%">
            <tr>
                <td width="15%" height="20px" style="text-align: right; font-weight:600;">Catatan :</td>
                <td></td>
            </tr>
            <tr>
                <td height="20px" style="text-align:right">-</td>
                <td style="padding-left: 10px;">Simpan dalam bentuk File Digital atau Print Out Bukti Pendaftaran Online ini.</td>
            </tr>
            <tr>
                <td height="20px" style="text-align: right; margin-right: 10px;">-</td>
                <td style="padding-left: 10px;">Berikan Bukti Pendaftaran Online ini kepada Panitia PPDB SMK Global Cendekia 
                    saat melakukan Pendaftaran Ulang di SMK Global Cendekia.
                </td>
        </table>
    </div>

                <script>
                    window.print();
                </script>

</body>
</html>