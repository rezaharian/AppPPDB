

      <?php
include("header_petugas.php");
require_once 'koneksi.php';

// cek id
if (isset($_GET['id_bayar'])) {
  $id = $_GET['id_bayar'];

  // ambil data berdasarkan id_produk
  $q =mysqli_query($koneksi,"select * from pembayaran where id_bayar='$id'");



    foreach ($q as $peg) :
    
  ?>



<section class="apa " style="background-image: linear-gradient(rgba(30, 50, 70, 0.8), rgba(4, 97, 186,0.8)),  url(asset/img/pj.png); background-repeat: no-repeat; background-size:cover " >
      <div class="container">
      <div class="row">
      <div class="col bg-light rounded">
      
      
      <table class="table table " border="0" cellpadding="8" style="margin-left: 10px;">
    <form action="proses_edit_pembayaran_petugas.php" method="post">
        <tr >
            <td width="200px">ID</td>
            <td><input type="text"  readonly name="id_bayar" value="<?= $peg['id_bayar'] ?>"></td> 
        </tr>
        <tr>
            <td>NIK</td>
            <td><input type="text" readonly name="nik" value="<?= $peg['nik'] ?>"></td> 

        </tr>
        <tr>
            <td>TGL Bayar</td>
            <td><input type="date" name="tgl_bayar" value="<?= $peg['tgl_bayar'] ?>"></td> 
        </tr>
        <tr>
      <td>
				<label>Untuk pembayaran :</label>
        </td>
        <td> <select type="text"  name="jenis_bayar" >
                <option value="<?= $peg['jenis_bayar'] ?>" ><?= $peg['jenis_bayar'] ?></option>
                <option value="Bukti Pembayaran Seragam Sekolah">Seragam Sekolah</option>
                <option value="Bukti Pembayaran kegiatan Masa Pengenalan Lingkungan Sekolah">MPLS</option>
                <option value="Bukti Pembayaran Pemeliharaan Sarana Prasarana">Pemeliharaan Sarana Prasarana</option>
                <option value="Bukti Pembayarn Lain-lain">Lain-lain</option>
                </select>
                </td>
               
        </tr>
        <tr>
            <td>Nominal Bayar</td>
            <td><input type="text" name="nominal_bayar" value="<?= $peg['nominal_bayar'] ?>"></td> 
        </tr>
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
      </div></div>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      </section>




        </tr>
   
    </table>



  <?php
  include ('footer_umum.php');
      endforeach;     
        
}



