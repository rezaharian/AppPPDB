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
                <style>
    *{
        overflow: auto;
        margin: 0;
    }
</style>
<section>
                    <div style="width: 100%;">


                <h5 style="margin-left: 120px;" > Halo <b><?php echo $_SESSION['us']; ?> :) </b> </br>Anda telah login sebagai <b><?php echo $_SESSION['lv']; ?></b>.</h5>


                <?php
            include ("tabel_siswa_p.php");
            ?>

            <?php
            include 'footer_umum.php'
            ?>
            


                    
                    </div> 
</section>

        
    

