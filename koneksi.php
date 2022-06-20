<?php
$koneksi = mysqli_connect("localhost","root","","psb1");

// cek Koneksi
if (mysqli_connect_errno()){
    echo "koneksi gagal boss" . mysqli_connect_errno();
}

?>