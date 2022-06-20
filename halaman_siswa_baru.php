<?php
            include ("header_siswa.php");
            ?>

            <section class="apa justify-content-center" style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >

            <div style="color: white;">
            
            <?php
            session_start();
            if(!isset($_SESSION ['nik'])){
            header ('location: index.php');
            }
            ?>
          
           

        
            <!-- Net -->
                <div class="container justify-content-center">
                    <div class="row  justify-content-center">
                    <div>
    <h3 style="color: white; " class="mt-2 display-6 ">Selamat Datang
    <div style="color: greenyellow;"> 
    <?php
            include "koneksi.php";
            $nik=$_SESSION['nik'];
            $q = mysqli_query($koneksi, "select * from data_siswa where nik='$nik'");
            while($b=mysqli_fetch_array($q)){
                
                echo "".$b['nama'];


            } 

            
            ?>

     </div>
     
    </h3>
    <p style="color: white; text-align:justify; background-color:rgba(225, 225, 225,0.1); padding: 10px; border-radius: 10px;">Halaman ini merupakan halaman resmi Pendaftaran Peserta Didik Baru SMK Global Cendekia. Untuk informasi lebih lanjut 
    bisa menghubungi panitia PPDB pada link yang terdapat di bagian bawah halaman ini. Pembayaran dapat dilakukan secara langsung di bagian Kasir SMK Global Cendekia Jl. Raya Bekasi K.23 No.37
     Kel. Cakung Barat, Kec. Cakung - Jakarta Timur atau <b style="color: yellow;">melalui Transfer ke BNI Syariah dengan No. Rekening : 1181638040 atas nama SMK Global Cendekia</b>.
    </p>
 
    </div>

                        <div class="col justify-content-center">
                        <h4 class="mt-5 " style="color: white;">Data Siswa :</h4>

                        <div style="color:black;" class="row bg-light p-4 m-1 rounded shadow-lg justify-content-center">
            <?php
                $tampilPeg    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
                $peg    =mysqli_fetch_array($tampilPeg);
                $status = ($peg['upload_ijazah']);
            ?>
            
    <div>
    STATUS : <span> 
    
<?php

$status = ($peg['upload_ijazah']);

if ($status == (($peg['upload_ijazah'])=='DALAM PROSES')) {
    echo '<p style="color:red; font-weight: 600; font-size: 20px;">DALAM PROSES</p>';
} elseif($status == (($peg['upload_ijazah'])=='DI TERIMA')) {
    echo '<p style="color:green; font-weight: 600; font-size: 20px;">DI TERIMA</p>'; 
} 


?>
    
    
    </span>
    </div>
    <div class="mt-3" >
        NIK : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> <?=$peg['nik']?> </b></div>
    </div>
    <div class="mt-3" >
        Nama : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> <?=$peg['nama']?> </b></div>
    </div>
    <div class="mt-3" >
        Alamat : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> <?=$peg['alamat_siswa']?> </b></div>
    </div>
    <div class="mt-3" >
        Tempat, Tanggal Lahir : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b><?=$peg['tempat_lahir']?>, <?=$peg['tanggal_lahir']?></b></div>
    </div>
    <div class="mt-3" >
        Jenis kelamin : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> <?=$peg['j_k']?> </b></div>
    </div>
    <div class="mt-3" >
        Agama : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> <?=$peg['agama']?> </b></div>
    </div>
    <div class="mt-3" >
        No. Telp : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> 0<?=$peg['no_hp_siswa']?> </b></div>
    </div>
    <div class="mt-3" >
        Email : <br> <div class="rounded mb-2 text-nowrap text-break"  style="background-color: #deedff; padding: 5px 10px; overflow:auto;"> <b> <?=$peg['email']?> </b></div>
    </div>
    <div class="mt-3" >
        Tahun Lulus : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> <?=$peg['tahun_lulus']?> </b></div>
    </div>
    <div class="mt-3" >
        Asal Sekolah : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> <?=$peg['asal_sekolah']?> </b></div>
    </div>
    <div class="mt-3" >
        Pilihan Jurusan : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> <?=$peg['jurusan']?> </b></div>
    </div>
    <div class="mt-5">
                            <a href=" halaman_siswa_edit_siswa1.php">
    <button type="button" class="btn btn-primary btn rounded-pill mb-2">UBAH DATA</button>
    </a></div>

        </div>


                        </div>
                        <div class="col justify-content-center mt-5">
                        <h4 style="color: white;">Bukti Pendaftaran :</h4>
                    
        <div class="row bg-light m-2 rounded p-1 justify-content-center" >
                        <div style=" box-shadow: 2px 2px 5px 0px; background-color:white; color:black;" class="row">

            
<?php



    $tampilPeg    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
    $peg    =mysqli_fetch_array($tampilPeg);
?>
        <img src="header.jpg">
        <b style="font-size: 70%;  text-align:center;">BUKTI PENDAFTARAN PPDB ONLINE</b>
        <div class="ps-4">
        <table style="width: 70%; font-size:70%;">
        <tr>
        <td >No Pendaftaran </td>
        <td > :  210<?=$peg['id_pendaftar']?> </td>
        <td>     </td>
        </tr>
        <tr>
        <td>Tgl Pendaftaran </td>
        <td> :  <?=$peg['upload_foto']?></td>
        <td></td>
        </tr>
        <tr>
        <td >Nama Pendaftar </td>
        <td > :  <?=$peg['nama']?> </td>
        <td>     </td>
        </tr>
        <tr>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        </table>
        <div style="font-size: 70%;">
        <p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
       
    
        </table></div>
        <div class="text-center">
        <a href=" cetak_siswa.php">
            <button type="button" class="btn btn-primary btn mt-4 rounded-pill shadow-lg  mb-2">CETAK </button>
            </a>
            </div> 
</div>
                        </div>
                    </div>
                    


                    <h4 class="mt-5" style="color: white;">Metode Pembayaran :</h4>
        <div  style="background-color: white; color:black;" class="row mb-5  p-3 shadow-lg rounded-3 m-1 justify-content-center">
            <div class="col-md-4  justify-content-center">
            
            <div style="background-color: whitesmoke;  box-shadow: 2px 2px 5px 0px" class="card justify-content-center mb-5 " style="">
        <img src="asset/img/atm1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Melalui Transfer</h5>
            <a href="melalui_tf.php" class="btn btn-primary">Klik disini !</a>
        </div>
        </div>


            </div>
            <div class="col-md-4 justify-content-center ">
            
            
            <div style="background-color: whitesmoke;  box-shadow: 2px 2px 5px 0px" class="card justify-content-center mb-5" style="">
        <img src="asset/img/kasir.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Melalui Tunai</h5>
            <a href="melalui_tunai.php" class="btn btn-primary">Klik disini !</a>
        </div>
        </div>


            </div>
            <div  class="col-md-4  justify-content-center">
                

            <div style="background-color: whitesmoke;  box-shadow: 2px 2px 5px 0px" class="card  justify-content-center mb-5" style="">
        <img src="asset/img/list.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Cek Status Pmbayaran</h5>
            <a href="status_bayar.php" class="btn btn-primary">Klik disini !</a>
        </div>
        </div>


            </div>
        
        </div>
        

        </form>
<h4 style="color: white;">Jika terjadi kendala silahkan hubungi  :</h4>
<div style="color: black;" class="row bg-light m-1 p-3 rounded mb-5 shadow-lg text-center  " >
      
      <div class="col">
          <img class="rounded-circle" style="width: 70%;  " src="asset/img/retno1.jpg">
          </br>
      Retnowati, S.Pd.</br>
     
      <a href="https://wa.me/+6281807760903?text=Saya  <?=$peg['nama']?> ingin informasi tentang PPDB SMK Global Cendekia">
    <buttontype="button" style="width: 75%;" class="btn btn-success rounded-pill mb-2"><b style="color: white;">Chat</b></buttontype=>
    </a>
    
     
      </div>
      <div class="col">
      <img class="rounded-circle" style="width: 70%;" src="asset/img/sunardi.jpg">
  </br>
     Drs. Sunardi </br>
     <a href="https://wa.me/+6281294419160?text=Saya  <?=$peg['nama']?> ingin informasi tentang PPDB SMK Global Cendekia">
    <buttontype="button" style="width: 75%;" class="btn btn-success rounded-pill mb-2"><b style="color: white">Chat</b></buttontype=>
    </a>
      
      </div>



    </br>
    <div>
    
   </div>
    
  
  
</form>
        
        </div>



      </br>
      <div>
     
      </div>
      




                </div>
            </section>



            










            <?php
            include ("footer_umum.php");
            ?>

