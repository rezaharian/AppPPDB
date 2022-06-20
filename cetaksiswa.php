

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <!-- my css -->
    <link rel="stylesheet" href="style.css">
    <title> </title>
  </head>
  <body id="home">

            <section id="welcome">
            <div class="container">
            <div class="row justify-content-center ">
            <div class="col">
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
            <html>
            <head>
            </head>
            <body>
                <?php
                    $tampilPeg    =mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
                    $peg    =mysqli_fetch_array($tampilPeg);
                ?>

                <img  src="header.jpg"><center>
                <h2 > BUKTI PENDAFTARAN PPDB ONLINE </h2></center> </br>
                <h5 style="margin-left:110px">Nomor Pendaftaran &ensp; &ensp; &ensp; &ensp;: 21-01<b><?=$peg['id_pendaftar']?>
                <br/>Tanggal Pendaftaran &ensp;&ensp;&ensp;&ensp; :  <?php
            date_default_timezone_set('Asia/Jakarta');
            echo " " . date('d-M-Y'); 
            ?></h5>
        <br/>
        
        <br/>
        <br/>
      
        
            <h3 style="margin-left:100px" >Data Yang Terdaftar :</h3>
        <table style="margin-left:100px" class="table  " >
            
            <tr >
                <td  width="190">NIK</td>
                <td>: <?=$peg['nik']?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?=$peg['nama']?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <?=$peg['alamat_siswa']?></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td>: <?=$peg['tempat_lahir']?>, <?=$peg['tanggal_lahir']?></td>
            </tr>
            <tr>
                <td>Jenis kelamin</td>
                <td>: <?=$peg['j_k']?></td>
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td>: <?=$peg['asal_sekolah']?></td>
            </tr>
            <tr>
                <td>No Telp</td>
                <td>: <?=$peg['no_hp_siswa']?></td>
            </tr>
            <tr>
                <td>Jurusan Yang dI pilih</td>
                <td>: <?=$peg['jurusan']?></td>
            </tr>

        

            <tr height="80" width="20">

                
            </tr>
            
        </table>












        



    <section>
    <div class="container">
    <div class="row ">
    <div class="col">
    <p><b style="margin-left:100px">Pendaftar</b> <b style="margin-left:500px" >Ketua PPDB</b></p>





            <br/>
            
            <br/>
            
            <br/>


                <p style="margin-left:100px"> <?=$peg['nama']?> <b style="margin-left:540px">Sunardi.S,Pd</b> </p>
    </div></div></div>
    </section>











                <script>
                    window.print();
                </script>
                </body>
</html>