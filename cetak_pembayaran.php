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




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        button{
            background-color: yellowgreen;
            text-align: center;
            padding: 10px;
            width: 100%;
            height: 50px;
            color: black;
            font-size: 30px;
            margin-bottom: 30px;
            border-radius: 30px;
            cursor: pointer;
        }
        header{
            width: 100%;
        }
        header img{
            width: 100%;
        }
        .konten-utama{
            width: 80%;
            margin: auto;
        }
        .konten-utama .judul{
            text-align: center;
            font-size: 25px;
            font-weight: 600;
            margin-top: 10px;
            margin-bottom: 20px;
            word-spacing: 2px;
            letter-spacing: 1px;
        }
        
        h4{
            font-size: 20px;
        }
        @media only print {
            button{
                display: none;
            }
        }
    </style>
    <title>Document</title>
</head>
<body>

    <?php
            $tampilPeg=mysqli_query($koneksi, "select * from data_siswa where nik='$_SESSION[nik]'");
            $peg=mysqli_fetch_array($tampilPeg);
    ?>
    <div>
        <a href="halaman_siswa_baru.php"><button>Kembali ke Home</button></a>
    </div>

    <header>
        <img src="header.jpg" alt="">
    </header>
    
<div>
               
<div class="col justify-content-center ">   
                                        <h4 class="mt-5 " style="color: white;">Riwayat Pembayaran :</h4>
                                
                        <div class="row bg-light m-2 rounded p-1 justify-content-center" >
                                        <div class="row justify-content-center  mt-3">
                
                    <div  class="col  justify-content-center border pb-4 mb-3 border p-1 rounded mt-2   shadow-lg p-3 mb-5 bg-body rounded  ">

                    
                    
                            <div style="margin: auto;" class="table-responsive">
                            <table border="1" class="table table-sm" >

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
                    </div>
                    </div>
                </div>
            </div>



</div>
<?php
                }
?>


                <!-- <script>
                    window.print();
                </script> -->

</body>
</html>