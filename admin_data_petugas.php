<?php
    include ("header_admin.php");
    ?>


                
                <?php 
                session_start();
            
                // cek apakah yang mengakses halaman ini sudah login
                if($_SESSION['lv']==""){
                    header("location:index.php?pesan=gagal");
                }
            
                
                ?>
                <!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<section class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
                <div class="container">
                <div class="row mt-5 bg-light" style="border-radius: 30px;">
                <div class="col m-3 ">


            <h5  > Halo <b><?php echo $_SESSION['us']; ?> :) </b> </br>Anda telah login sebagai <b><?php echo $_SESSION['lv']; ?></b>.</h5>

            <?php
        include ("tabel_petugas.php");
        ?>
        


                </div>
                </div>
                </div>
    
   </br> 
   </br> 
   </body>
</html>
        
    
<?php
include ("footer_umum.php");
?>

