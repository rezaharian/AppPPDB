<?php
    include ("header_petugas.php");
    ?>


            <?php 
                    session_start();
                
                    // cek apakah yang mengakses halaman ini sudah login
                    if($_SESSION['lv']==""){
                        header("location:index.php?pesan=gagal");
                    }
                
                    ?>
          <?php
    include "koneksi.php";
    $query = mysqli_query($koneksi, "select * from data_siswa ORDER BY nik DESC");
    ?>

<section class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
        <div class="container justify-content-center">
        <div class="row  justify-content-center">
        
    

      

    <h4 style="color: white;">Status Siswa<br/>
    </h4>
    <form action="" method="post">
        <table  class="table table-striped table-bordered bg-light justify-content-center ">

        <thead>
        <tr style="background-color:lightblue; ">
                    <th> NO. </th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th style="background-color: blue; color:white; text-align:center; font-size:30px; border-radius:10px;">Status</th>
            
                    <th width="80px" style="color:black; text-align:center; font-size:20px; border-radius:10px;">Detail</th>
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
                        <td><?php echo $data["nik"];?></td>
                        <td><?php echo $data["nama"];?></td>
                        <td><?php echo $data["alamat_siswa"];?></td>
                        <td><?php echo $data["tempat_lahir"];?></td>
                        <td><?php echo $data["tanggal_lahir"];?></td>
                        <td><?php echo $data["j_k"];?></td>
                        <td style="background-color: chartreuse;"><b style=""><?php echo $data["upload_ijazah"];?></b></td>

                        <td style="background-color:lightblue;">
           <a href="detail_pendaftar.php?nik=<?=$data['nik']; ?>" ><button type="button" class="btn btn-success"><i class="bi bi-card-checklist"></i></button></a>

                </td>
            
                </td>
            </td>
            </tr>
            <?php $no++; } ?>
            <?php } ?>
            </tbody>
        </table>
    </form>
    </div></div>
    <div class="">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    </div>
    </section>


        
    <?php
    include ("footer_umum.php");
    ?>



