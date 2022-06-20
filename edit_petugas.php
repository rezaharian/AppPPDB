<?php
    include('header_admin.php');
?>
            <!-- akhir navbar -->
            <?php 
			session_start();
		
			// cek apakah yang mengakses halaman ini sudah login
			if($_SESSION['lv']==""){
				header("location:index.php?pesan=gagal");
			}
		
			?>

      <br/>
      <br/>
      <br/>


      <?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_produk
  $q =mysqli_query($koneksi,"select * from petugas where id='$id'");



    foreach ($q as $peg) :
    
  ?>



<section id="table">
      <div class="container">
      <div class="row">
      <div class="col">
      
      
      <table class="table table-light " border="0" cellpadding="8" style="margin-left: 10px;">
    <form action="proses_edit_petugas.php" method="post">
        <tr >
            <td width="90">ID</td>
            <td><input type="text"  name="id" value="<?= $peg['id'] ?>"></td> 
        </tr>
        <tr>
            <td>Uername</td>
            <td><input type="text" name="us" value="<?= $peg['us'] ?>"></td> 

        </tr>
        <tr>
            <td>Paswsword</td>
            <td><input type="text" name="pw" value="<?= $peg['pw'] ?>"></td> 
        </tr>
        <td>Level</td>
        <td>
          <select type="text" name="lv" value="<?= $peg['lv'] ?>">
          <option >kepala</option>
          <option selected="selected">admin</option>
          <option>petugas</option>
          <option>guru</option>
          </select>
          </td>
          <tr>
        <td>
        <input type="submit" name="submit" value="Ubah Data">
        </td></tr>
        <tr height="80">
        
            </form>       
       
       <br/>
      </table>
      </div>
      <div class="col">
    

      </div>
      </div></div></section>




        </tr>
        
    </table>




               
            <!-- akhir footer -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

           

  <?php
      endforeach;     
        
}
?>
<section>
</section>
<?php
include ('footer_umum.php');
?>


