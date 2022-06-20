
            <?php 
			session_start();
		
			// cek apakah yang mengakses halaman ini sudah login
			if($_SESSION['lv']==""){
				header("location:login_petugas.php?pesan=gagal");
			}
		
			?>
            <?php
include('header_admin.php');
            ?>

     
      <br/>
      <section  id="table" class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
      <div style="margin-bottom: 150px;" class="container ">
      <div style="border-radius: 20px;;" class="row bg-light  ">
      <div class="col">
      
      
      <table class="table  " >    
        <form method="post" action="proses_tambah_petugas.php">  

        <tr>
        <td>
        <h4>Input Petugas Baru :
        </h4></td></tr>
      <tr><td>ID</td>
      <td>
      <input type="text" name="id" placeholder="ID ">
      </td>
      </tr>
      <tr><td>Username</td>
      <td>
      <input type="text" name="us" placeholder="Username">
      </td>
      </tr>
      <tr><td>Password</td>
      <td>
      <input type="text" name="pw" placeholder="Password">
      </td>
      </tr>
      <tr><td>Level</td>
        <td>
            <select type="text" name="lv" value="<?= $peg['lv'] ?>">
            <option >kepala</option>
            <option selected="selected">admin</option>
            <option>petugas</option>
            <option>guru</option>
            </select>
        </td> 
        </tr>  
        <tr>
        <td>
        <input type="submit" name="submit" value="Tambah Data">
        </td>
        </tr>
      </form><br/>
      </table>

    
      </div>
      
     
      </div>
      
      </div>
      
      </br></section>


    
                

           <?php
include('footer_umum.php');
           ?>

