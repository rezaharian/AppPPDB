
  
echo "".$b['nama']."<b> Berikut Data Anda </b>";
echo "<br/>";
echo "<table bgcolor =aqua =400 border =2>";
echo "<tr>";
echo "<td>";
echo "<b> Nama : </b>".$b['nama'];
echo "</td>";
echo "</tr>";
echo "<br/>";
echo "<tr>";
echo "<td>";
echo "<b> NIK : </b>".$b['nik'];
echo "</td>";
echo "</tr>";
echo "<br/>";
echo "<tr>";
echo "<td>";
echo "<b> Alamat : </b>".$b['alamat_siswa'];
echo "</td>";
echo "</tr>";
echo "<br/>";
echo "<tr>";
echo "<td>";
echo "<b> Tempat Lahir : </b>".$b['tempat_lahir'];
echo "</td>";
echo "</tr>";
echo "<br/>";
echo "<tr>";
echo "<td>";
echo "<b> Tanggal Lahir : </b>".$b['tanggal_lahir'];
echo "</td>";
echo "</tr>";
echo "<br/>";
echo "<tr>";
echo "<td>";
echo "<td>";echo "<b> Jenis Kelamin : </b>".$b['j_k'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Agama: </b>".$b['agama'];
echo "<br/>";
echo "<b> No HP : </b>".$b['no_hp_siswa'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Email : </b>".$b['email'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Tahun Lulus : </b>".$b['tahun_lulus'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Asal Sekolah : </b>".$b['asal_sekolah'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Nama Ayah : </b>".$b['nama_ayah'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Nama Ibu : </b>".$b['nama_ibu'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Pekerjaan Orang Tua : </b>".$b['pekerjaan_orang_tua'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Alamat Orang Tua  : </b>".$b['alamat_orang_tua'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b>No Hp Orang Tua  : </b>".$b['no_hp_orang_tua'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Nama Wali : </b>".$b['nama_wali'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Pekerjaan Wali : </b>".$b['pekerjaan_wali'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Alamat Wali : </b>".$b['alamat_wali'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> No Hp Wali : </b>".$b['no_hp_wali'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Jurusan : </b>".$b['jurusan'];
echo "</td>";
echo "<br/>";
echo "<td>";echo "<b> Ekskul  : </b>".$b['ekskul'];
echo "<br/>";
echo "<tr/>";





echo "</table>";
echo "</center>";



<table class="table table-light border " border="0" cellpadding="8" style="margin-left: 100px;">
       
       <tr >
           <td width="90"><b>NIK</b></td>
           <td>: <?=$peg['nik']?></td>
      
           <td><b>Nama</b></td>
           <td>: <?=$peg['nama']?></td>
       </tr>
       <tr>
           <td>Alamat</td>
           <td>: <?=$peg['alamat_siswa']?></td>
       
           <td>TTL</td>
           <td>: <?=$peg['tempat_lahir']?>, <?=$peg['tanggal_lahir']?></td>
       </tr>

       <tr>
           <td>Jenis Kelamin</td>
           <td>: <?=$peg['j_k']?></td>
       
           <td>Agama</td>
           <td>: <?=$peg['agama']?></td>
       </tr>
       <tr>
           <td>No Hp</td>
           <td>: <?=$peg['no_hp_siswa']?></td>
       
           <td>Email</td>
           <td>: <?=$peg['email']?></td>
       </tr>
       <tr>
           <td>Tahun Lulus</td>
           <td>: <?=$peg['tahun_lulus']?></td>
     
           <td>Asal Sekolah</td>
           <td>: <?=$peg['asal_sekolah']?></td>
           </tr>
       <tr>
           <td>Nama Ayah</td>
           <td>: <?=$peg['nama_ayah']?></td>
       
           <td>Nama Ibu</td>
           <td>: <?=$peg['nama_ibu']?></td>
           </tr>
       <tr>
           <td>Pekerjaan</td>
           <td>: <?=$peg['pekerjaan_orang_tua']?></td>
      
           <td>Alamat</td>
           <td>: <?=$peg['alamat_orang_tua']?></td>
           </tr>
       <tr>
           <td>No Hp</td>
           <td>: <?=$peg['no_hp_orang_tua']?></td>
       
           <td>Nama Wali</td>
           <td>: <?=$peg['nama_wali']?></td>
           </tr>
       <tr>
           <td>Pekerjaan</td>
           <td>: <?=$peg['pekerjaan_wali']?></td>
      
           <td>Alamat</td>
           <td>: <?=$peg['alamat_wali']?></td>
           </tr>
       <tr>
           <td>No Hp</td>
           <td>: <?=$peg['no_hp_wali']?></td>
       
           <td>Jurusan</td>
           <td>: <?=$peg['jurusan']?></td>
           </tr>
       <tr>
           <td>Easkul</td>
           <td>: <?=$peg['ekskul']?></td>
       </tr>

    
    







       <tr height="80">
           
       </tr>
   </table>

   <?php
	include ("tabel_petugas.php");
	include ("tabel_siswa_p.php");
	?>