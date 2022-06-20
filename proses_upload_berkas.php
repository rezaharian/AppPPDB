<?php
include "koneksi.php";

// ambil data file
$ak = $_FILES['akte']['name'];
$ak_b = $_FILES['akte']['tmp_name'];
$ij = $_FILES['ijazah']['name'];
$ij_b = $_FILES['ijazah']['tmp_name'];
$kk = $_FILES['kk']['name'];
$kk_b = $_FILES['kk']['tmp_name'];
$ft = $_FILES['foto']['name'];
$ft_b = $_FILES['foto']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "terupload/";

// pindahkan file
$terupload = move_uploaded_file($ak_b, $dirUpload.$ak);
$terupload = move_uploaded_file($ij_b, $dirUpload.$ij);
$terupload = move_uploaded_file($kk_b, $dirUpload.$kk);
$terupload = move_uploaded_file($ft_b, $dirUpload.$ft);




if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$ak."'>".$ak."</a><br/>";
    echo "Link: <a href='".$dirUpload.$ij."'>".$ij."</a><br/>";
    echo "Link: <a href='".$dirUpload.$kk."'>".$kk."</a><br/>";
    echo "Link: <a href='".$dirUpload.$ft."'>".$ft."</a><br/>";
} else {
    echo "Ok!";
}
 ?>