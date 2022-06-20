

    <?php
    include ("header_regis.php");
    ?>

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






    <section class="apa pb-5" style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
    <div class="container ">
    <div class="row justify-content-center ">
    <div class="col-md-6  justify-content-center ">
    <div class="text-center">
        <h4 style="color: white;"> Silahkan lengkapi data anda :</h4>
    
        <img class=" img-thumbnail  rounded-circle border-0 bg-light" style="width: 100px; margin-bottom:-100px;" src="asset/img/logo-500px.png">
        </div>
        <?php
            $tampilPeg    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
            $peg    =mysqli_fetch_array($tampilPeg);
        ?>
        <form class=" border p-1 rounded mt-5 border-radius-3  pb-5  shadow-lg p-3 mb-5 bg-light rounded  " method="POST" action="proses_siswa_edit_data_siswa1y.php">

        <div class="mb-3 mt-5" >
            <label name="nik" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> NIK</label>
            <input type="text"  name="nik" value="<?=$peg['nik']?>" class="form-control">
        </div>

        <div class="mb-3 mt-3" >
            <label name="nama" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Nama</label>
            <input type="text"  name="nama" value="<?=$peg['nama']?>" class="form-control">
        </div>

        <div class="mb-3 mt-3" >
            <label name="tempat_lahir" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Tempat Lahir</label>
            <input type="text"  name="tempat_lahir" value="<?=$peg['tempat_lahir']?>" class="form-control">
        </div>

        <div class="mb-3 mt-3" >
            <label name="tanggal_lahir" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Tanggal Lahir</label>
            <input type="date"  name="tanggal_lahir" value="<?=$peg['tanggal_lahir']?>" class="form-control">
        </div>

        <div class="mb-3 mt-3" >
            <label name="j_k" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Jenis Kelamin</label>
            <select type="text"  name="j_k"  value="<?=$peg['j_k']?>" class="form-control">
            <option value="<?=$peg['j_k']?>"> <?=$peg['j_k']?></option>
            <option value="Perempuan">Perempuan</option>
            <option value="Laki-Laki">Laki-Laki</option>
            </select>
        </div>

        <div class="mb-3 mt-3" >
            <label name="agama" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Agama</label>
            <select type="text"  name="agama"  class="form-control">
            <option value="<?=$peg['agama']?>"><?=$peg['agama']?></option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="katolik">katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
            <option value="Konghucu">Konghucu</option>
                    </select>
        </div>

        <div class="mb-3 mt-3" >
            <label name="no_hp-siswa" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> No HP</label>
            <input type="text"  name="no_hp_siswa" value="<?=$peg['no_hp_siswa']?>" class="form-control">
        </div>

        <div class="mb-3 mt-3" >
            <label name="email" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Email</label>
            <input type="email"  name="email"  value="<?=$peg['email']?>" class="form-control">
        </div>

        <div class="mb-3 mt-3" >
            <label name="alamat_siswa" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Alamat</label>
            <input type="text"  name="alamat_siswa" value="<?=$peg['alamat_siswa']?>" class="form-control"> </input>
        </div>

        <div class="mb-3 mt-3" >
            <label name="asal_sekolah" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Asal Sekolah</label>
            <input type="text"  name="asal_sekolah" value="<?=$peg['asal_sekolah']?>" class="form-control">
        </div>

        <div class="mb-3 mt-3" >
            <label name="tahun_lulus" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Tahun Lulus</label>
            <input type="text"  name="tahun_lulus" value="<?=$peg['tahun_lulus']?>" class="form-control">
        </div>
        <div class="mb-3 mt-3" >
            <label name="jurusan" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> Jurusan Yang Anda Pilih</label>
            <select type="text"  name="jurusan"  class="form-control">
            <option value="<?=$peg['jurusan']?>"><?=$peg['jurusan']?></option>
            <option value="Teknik Kendaraan Ringan"> Teknik Kendaraan Ringan</option>
            <option value="Akuntansi"> Akuntansi</option>
            <option value="Teknik Komputer & Jaringan"> Teknik Komputer & Jaringan</option>
            </select>
        </div>
        <div class="mb-3 mt-3" >
            <label name="upload_foto" class="form-label"> <i class="fas fa-user-circle"></i>
    </i> </label>
            <input type="hidden"  name="upload_foto"  value="<?php date_default_timezone_set('Asia/Jakarta');
            echo "" . date('d F Y'); 
                            ?>
            " class="form-control">
        </div>
    





            
        <div class=" justify-content-center text-center mt-5">
            <input class="btn btn-success rounded-pill " style="width:30%;"  type="submit" name="submit" value="Simpan">
            </div>
        <tr height="80">
            
        </form>
            




    </div>
    </div>
    </section>


    <?php
    include ("footer_umum.php");
    ?>
