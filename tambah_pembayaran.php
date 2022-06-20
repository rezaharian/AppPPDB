<?php
include ("header_admin.php");
?>
<?php 
                    session_start();
                
                    // cek apakah yang mengakses halaman ini sudah login
                    if($_SESSION['lv']==""){
                        header("location:login_petugas.php?pesan=gagal");
                    }
                
                    ?>

<section  id="table" class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
      <div class="container">
      <div class="row">
      <div style="border-radius: 20px;" class="col  bg-light">
      
      
      <table class="table ">    
        <form method="post" action="proses_tambah_pembayaran1.php">  

        <tr>
        <td>
        <h4>Input Pembayaran Baru :</h4>
        </td>
       </tr>
      <tr><td></td>
      <td>
      <input type="hidden" name="id_bayar" placeholder="ID ">
      </td>
      </tr>
      <tr><td>NIK</td>
      <td>
      <input type="text" name="nik" placeholder="nik">
      </td>
      </tr>
      <tr><td>Tgl Bayar</td>
      <td>
      <input type="date" name="tgl_bayar" placeholder="tgl">
      </td>
      </tr>
      <tr><td>Jenis Pembayaran</td>
      <td>
      <input type="checkbox" name="jenis_bayar[]" value="Pembayaran Seragam ">Pembayaran Seragam</br>
		  <input type="checkbox" name="jenis_bayar[]" value="Pembayaran MPLS "> Pembayaran MPLS </br>
		  <input type="checkbox" name="jenis_bayar[]" value="pembayaran Pemeliharaan Sarana Prasarana ">Pembayaran Sarana Prasarana </br>     
		  <input type="checkbox" name="jenis_bayar[]" value="Pembayaran lain-lain">Pembayaran Lain-lain    </td>
      </tr>
      <tr><td>Nominal</td>
      <td>
      <input type="text" name="nominal_bayar" placeholder="nominal">
      </td>
      </tr>
        <tr>
        <td>
        <input class="btn btn-primary" type="submit" name="submit" value="Tambah Data">
        </td>
        </tr>
      </form><br/>
      </table>
      </div>
      </div>
      </br>
     </br>
     </br>
     </br>
     </br>
      </div></section>


    <?php
    include("footer_umum.php");
    ?>