
            <?php

    require_once 'koneksi.php';

    // cek id
    if (isset($_GET['nik'])) {
        $id = $_GET['nik'];

        // ambil data berdasarkan id_produk
        $q =mysqli_query($koneksi,"select * from data_siswa where nik='$id'");



        foreach ($q as $peg) :
        
        ?>
        <?php
    include("header_petugas.php");
        ?>



        <section >
        <div class="container justify-content-center ">
        <div class="row  justify-content-center">
        <div class="col">
    

        <div  style="background-color: lawngreen; border-radius:20px; " class="col p-2 justify-content-center">
        <b >_________________ Data Pendaftar</b>

    <table class="table table-striped  mt-3   " >
        <form  action="proseseditdatastatus.php" method="post">
            <tr >
                <td width="90">NIK</td>
                <td style="font-size: 20px;"> : <?= $peg['nik'] ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td style="font-size: 20px;"> : <?= $peg['nama'] ?></td>
            </tr>
            <tr>
                <td>Pilihan Jurusan</td>
                <td style="font-size: 20px;"> : <?= $peg['jurusan'] ?></td> 
            </tr>
            <tr>
            <td>Status</td>
            <td style="font-size: 20px; font-weight:600;"> : 
            <?= $peg['upload_ijazah'] ?>
            </td>
            </tr>
            
            
            <tr height="20">
            
                </form>
            </tr>
            
        </table>
        </div>
        </div>
        <div style="background-color: lawngreen; border-radius:10px;" class="col ">
        <!-- aaaa -->
        <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "select * from pembayaran where nik='$id'");

    ?>

    <b>_________________ Riwayat Pembayaranr</b>

    <form action="" method="post">
        <table class="table">

        <thead>
        <tr>
                    <th> NO. </th>
                    <th>ID  </th>
                    <th>NIK</th>
                    <th>Tgl </th>
                    <th>Jenis Pembayaran</th>
                    <th>Nominal</th>
            </tr>
            </thead>
            <tbody>
            <?php if(mysqli_num_rows($query)>0){ ?>
            <?php
                $no = 1;
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $data["id_bayar"];?></td>
                        <td><?php echo $data["nik"];?></td>
                        <td><?php echo $data["tgl_bayar"];?></td>
                        <td><?php echo $data["jenis_bayar"];?></td>
                        <td><?php echo $data["nominal_bayar"];?></td>
                        <td>
                <?php 
                // echo "<a href='edit_petugas.php?id=".$data['id']."'>Ubah</a>"; 
            
                ?>
                </td>
                </td>
            </td>
            </tr>
            <?php $no++; } ?>
            <?php } ?>
            </tbody>
        </table>
    </form>
                
    <?php
    $query = mysqli_query($koneksi, "SELECT SUM(nominal_bayar)
                    FROM pembayaran where nik='$id' ");
                    while($a = mysqli_fetch_array($query)) {
                    ?>            
    <?php
    $x= 2300000;
    $f=$x-($a['SUM(nominal_bayar)'])  ;
    $g= ($a['SUM(nominal_bayar)']) ;


    ?>
        <tr>
        <td class="mt-3">  <p class="mt-4">Total Tagihan </td> <td> <b> : Rp. <?php echo number_format($x);?></b></p></td>
        </tr>
        <tr>
        <td>   <p>Jumlah Bayar  </td> <td> <b> : Rp. <?php echo  number_format($g);?></b> </p></td>
        </tr>
        <tr class="mb-4">
        <td> <p class="mb-5s"> Sisa Tagihan  :  </td><td> <b style="color: red;">  Rp.  <?php echo number_format($f)?> </b></p> </td>
        </tr>
        <div class="mb-3"></div>
        

                    
                    <?php
                    }
                    ?>

    <!-- bbbbb -->
        </div>
        </div>
        
        <!-- aaaaaa -->
        <div style="background-color: lawngreen; border-radius:20px;"  class="mt-5 p-3">
        <b>_________________ Riwayat Bukti Transfer</b>

        <table  class="table   table-bordered">
        
                <tr>
                    <th width="10%">nik</th>
                    <th width="20%">ket</th>
                    <th width="40%">bukti</th>
                </tr>
                <?php 
                $data = mysqli_query($koneksi,"select * from bukti  where nik='$id' ");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $d['nik']; ?></td>
                        <td><?php echo $d['ket']; ?></td>
                        <td><img src="gambar/<?php echo $d['bukti'] ?>" width="50%"></td>
                        
                    </tr>
                    <?php
                }
    
                ?>
            </table>
            </div>



        <!-- bbbbbbbbbbb -->
        </div>
        </div></div></section>
    <div class="mb-5">
    </div>
        <?php
            endforeach;     
        include("footer_umum.php"); 
    }
