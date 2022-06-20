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
                                        <h4 class="mt-5 " style="color: white;">Rincian Pembayaran :</h4>

                                        <div style="color:black;" class="row bg-light p-4 m-1 rounded shadow-lg justify-content-center">
                            <?php
                                $tampilPeg    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
                                $peg    =mysqli_fetch_array($tampilPeg);
                            ?>
                            

                    <div class="mt-3" >
                        Seragam Sekolah : <br> 
                        <div>
                        <ul>
                        <li>Baju Batik</li>
                        <li>Baju Muslim</li>
                        <li>Baju Praktek</li>
                        <li>Baju Olahraga</li>

                        </ul></div>
                        <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> Rp. 900.000 </b></div>
                    </div>
                    <div class="mt-3" >
                        Masa Pengenalan Lingkungan Sekolah : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> Rp. 250.000 </b></div>
                    </div>
                    <div class="mt-3" >
                        Pemeliharaan Sarana Prasarana : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> Rp. 800.000 </b></div>
                    </div>
                    <div class="mt-3" >
                        Lain-lain : <br> <div class="rounded mb-2"  style="background-color: #deedff; padding: 5px 10px;"> <b> Rp. 350.000 </b></div>
                    </div>
                    <div class="mt-3" >
                        <c style="color: rgb(255, 15, 15); font-size: 20px; font-weight:500; letter-spacing: 1px;">Total :</c> <br> <div class="rounded mb-2"  style="background-color: rgba(255, 15, 15, 0.3); padding: 5px 10px;"> <b> Rp. 2.300.000 </b></div>
                    </div>
            
                <!-- <div class="mt-3 rounded" style="background-color: red; width:100%; height:8px;" >
                    </div> -->
                <!-- <div class="mt-3" " >
                    <p style="color:red; font-weight:800; " > Total : </p>  <div class="rounded mb-2"  style="background-color: #FAB1A1; padding: 5px 10px;"> <b style="color:red; font-size:17px;"> Rp. 2.300.000 </b></div>
                    </div> -->



                   

                        </div>


                                        </div>
                                        
                                        <div class="col justify-content-center ">   
                                        <h4 class="mt-5 " style="color: white;">Riwayat Pembayaran :</h4>
                                
                        <div class="row bg-light m-2 rounded p-1 justify-content-center" >
                                        <div class="row justify-content-center  mt-3">
                
                    <div  class="col  justify-content-center border pb-4 mb-3 border p-1 rounded mt-2   shadow-lg p-3 mb-5 bg-body rounded  ">

                        
                    <?php
                            $s    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
                            $peg    =mysqli_fetch_array($s);
                        
                        ?>
                    
                            <div class="table-responsive">
                            <table class="table table-sm" >

                            <?php
                            $query   =mysqli_query($koneksi, "select * from pembayaran  where nik='$_SESSION[nik]' ");
                        
                            ?>
                            <?php if(mysqli_num_rows($query)>0) { ?>
                
                            
                            <tr>
                            <tr>
                            <td>No</td>
                            <td style="width: 300px;">Nama Pembayaran </td>
                            <td style="width: 300px">Tanggal bayar</td>
                            <td>Nominal</td>

                        
                            </tr>
                            <tr>    
                            <?php
                    $no = 1;
                    while($peg = mysqli_fetch_array($query)){
                    ?>
                            <td><?php echo $no ?></td> 
                            <td><?=$peg['jenis_bayar']?> </td>
                            <td> <?=$peg['tgl_bayar']?></td>
                            <td> Rp. <?=$peg['nominal_bayar']?></td>
                            </tr>
                        
                        
                            
                            </tr>
                        
                            </tr>
                        

                            <tr height="20">
                                
                            </tr>
                            <?php $no++; } ?>
                    <?php } ?>
                    <tr>
                    <td></td>
                    <?php

                $query = mysqli_query($koneksi, "SELECT SUM(nominal_bayar)
                FROM pembayaran where  nik='$_SESSION[nik]'");
                while($a = mysqli_fetch_array($query)) {
                ?>
                    <td><b>Total</b></td>
                    <td></td>
                    <td ><b>  <?php echo "Rp." . number_format($a['SUM(nominal_bayar)']) ;?></b></td>
                    </tr>
  
                </div>
                
                        </table>
                    </div> <div>
                    <a href="cetak_bayar.php"> <button class="btn-primary" style="border-radius: 5px;">Cetak Riwayat Pembayaran</button> </a>
                    </div>
                    </div>
                    
                </div>
            </div>

            <h4 class="mt-3" style="color: white;">Rincian Tagihan  :</h4>
            <div style="color: black;" class="row bg-light m-2 rounded p-1 justify-content-center" >

            
            
    <?php
$x= 2300000;
$f=$x-($a['SUM(nominal_bayar)'])  ;
$g= ($a['SUM(nominal_bayar)']) ;


?>
            <td class="mt-3">  <p class="mt-4">Total Tagihan </td> <td> <b> : Rp. <?php echo number_format($x);?></b></p></td>
      </tr>
      <tr>
     <td>   <p>Jumlah Bayar  </td> <td> <b> : Rp. <?php echo  number_format($g);?></b> </p></td>
     </tr><tr class="mb-4">
       <td> <p class="mb-5s"> Sisa Tagihan  :  </td><td> <b style=" color: red; font-size:20px;">  Rp.  <?php
        echo number_format($f);
                ?> </b></p> </td>
       </tr>
       <div class="mb-3"></div>
    

                
                <?php
                }
                ?>
            </div>
            <div class="row bg-light m-2 mb-5 rounded p-1 justify-content-center" >
            <?php
                 $s    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
                 $peg    =mysqli_fetch_array($s);
                        
            ?>
            <div style="color: black;" class="container">
		<h4 style="text-align: center;">Upload Bukti Bayar</h4>
		<form action="proses_bukti1.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nik :</label>
				<input type="text" readonly class="form-control"  name="nik" value="<?=$peg['nik']?>" required="required">
			</div>
			<div class="form-group">
				<label>Sebagai Bukti Pembayaran : </label><select name="ket" id="">
                <option value="-"> -----</option>
                <option value="Bukti Pembayaran Seragam Sekolah">Seragam Sekolah</option>
                <option value="Bukti Pembayaran kegiatan Masa Pengenalan Lingkungan Sekolah">Masa Pengenalan Lingkungan Sekolah</option>
                <option value="Bukti Pembayaran Pemeliharaan Sarana Prasarana">Pemeliharaan Sarana Prasarana</option>
                <option value="Bukti Pembayarn Lain-lain">Lain-lain</option>
                </select>
			</div>
			<div class="form-group mt-2">
				<label>Bukti :</label>
				<input type="file" name="bukti" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif | 
			</br> Maksimal ukuran file : 5 MB</p>
			</div>			
			<input type="submit" name="" value="Upload" class="btn btn-primary rounded">

        
            <a href="tampil1.php" ><button type="button" class="btn btn-warning">Lihat History </button></a>
            
    
		</form>
	</div>

</div>
    
                                    </div>
                            </div>
                                </div>
                                
                            </section>
                            <?php
                            include ("footer_umum.php");
                            ?>

