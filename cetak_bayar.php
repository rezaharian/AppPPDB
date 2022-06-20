<?php
        ob_start();
        session_start();
            if(!isset($_SESSION['nik'])){
                die("<b>Oops!</b> Access Failed.
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
    <?php
                            $query   =mysqli_query($koneksi, "select * from pembayaran  where nik='$_SESSION[nik]' ");
                        
                            ?>
                            <?php if(mysqli_num_rows($query)>0) { ?>
                
    <div>
        <a href="status_bayar.php"><button>Kembali</button></a>
    </div>

    <header>
        <img src="header.jpg" alt="">
    </header>
    <div class="konten-utama">
        <div class="judul">
            RIWAYAT PEMBAYARAN<br>PPDB ONLINE 2021/2022
        </div>
        <table width="70%" height="60px">
            <div class="nomor">
                <tr>
                    <td width="35%">Nomor Pendaftaran</td>
                    <td width="5%">:</td>
                    <td width="30%">210<?=$peg['id_pendaftar']?></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td><?=$peg['nama']?>
                    </td>
                </tr>
            </div>
        </table>
        <div><h4>Biaya yang sudah di bayarkan :</h4></div>
        <table width="100%" border="1" style="border-collapse: collapse;">
            <div class="data">
                <tr style="text-align: center; height: 30px;">
                    <td width="5%">No</td>
                    <td width="45%">Nama Pembayaran</td>
                    <td width="25%">Tanggal Bayar</td>
                    <td width="25%">Nominal</td>
                </tr>
                <tr >
                <?php
                    $no = 1;
                    while($peg = mysqli_fetch_array($query)){
                    ?>
                    <td style="text-align: center; height: 30px; padding-left:10px"><?php echo $no ?></td>
                    <td style="height: 30px;"><?=$peg['jenis_bayar']?></td>
                    <td style="height: 30px;"><?=$peg['tgl_bayar']?></td>
                    <td style="height: 30px;">Rp. <?=$peg['nominal_bayar']?></td>
                </tr>
                <?php $no++; } ?>
               
                <tr>
            </table>

            <table width="70%" style="margin-top: 30px; ">
                    <?php

$query = mysqli_query($koneksi, "SELECT SUM(nominal_bayar)
FROM pembayaran where  nik='$_SESSION[nik]'");
while($a = mysqli_fetch_array($query)) {
?>
                <tr>
    <td width="40%" style="height: 25px;"><b>Total Pembayaran</b></td>
    <td width="2%">:</td>
    <td width="5%">Rp.</td>
    <td width="25%"><b>  <?php echo "" . number_format($a['SUM(nominal_bayar)']) ;?></b></td>
                </tr>
                <?php
$x= 2300000;
$f=$x-($a['SUM(nominal_bayar)'])  ;
$g= ($a['SUM(nominal_bayar)']) ;


?>
                <tr>
                    <td style="height: 25px;"><b>Total Tagihan</b></td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><b><?php echo number_format($x);?></b></td>
                </tr>
                <tr>
                    <td style="height: 25px;"><b>Sisa Tagihan</b></td>
                    <td>:</td>
                    <td>Rp.</td>
                    <td><b style=" color: red; font-size:20px;"><?php
        echo number_format($f);
                ?> </b></td>
                </tr>
   
        

       <?php
}
?>    
        </table>
            
        <br>
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
            <?php
            $tampilPeg=mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
            $peg=mysqli_fetch_array($tampilPeg);
    ?>
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
                <td style="padding-left: 10px;">Simpan dalam bentuk File Digital atau Print Out Status Riwayat Pembayaran ini.</td>
            </tr>
            
        </table>
    </div>
    <?php } ?>

                <script>
                    window.print();
                </script>

</body>
</html>