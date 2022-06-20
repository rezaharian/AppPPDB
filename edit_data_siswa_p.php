
        <?php

    require_once 'koneksi.php';

    // cek id
    if (isset($_GET['nik'])) {
        $id = $_GET['nik'];

        // ambil data berdasarkan id_produk
        $q =mysqli_query($koneksi,"select * from data_siswa where nik='$id'");



        foreach ($q as $peg) :
        
        ?>

    <table class="table table-light " border="0" cellpadding="8" style="margin-left: 100px;">
        <form action="proses_edit_data_siswa_p.php" method="post">
            <tr >
                <td width="90">NIK</td>
                <td><input type="text"  name="nik" value="<?= $peg['nik'] ?>"></td> 
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?= $peg['nama'] ?>"></td> 

            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_siswa" value="<?= $peg['alamat_siswa'] ?>"></td> 
            </tr>
            <tr>
                <td>TTL</td>
                <td><input type="text" name="tempat_lahir" value="<?= $peg['tempat_lahir'] ?>"><br/><br/>
                <input type="date" name="tanggal_lahir" value="<?= $peg['tanggal_lahir'] ?>"></td> 
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="j_k" value="<?= $peg['j_k'] ?>"></td> 
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" value="<?= $peg['agama'] ?>"></td> 
            </tr>
            <tr>
                <td>No Hp</td>
                <td><input type="text" name="no_hp_siswa" value="<?= $peg['no_hp_siswa'] ?>"></td> 
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="<?= $peg['email'] ?>"></td> 
            </tr>
            <tr>
                <td>Tahun Lulus</td>
                <td><input type="text" name="tahun_lulus" value="<?= $peg['tahun_lulus'] ?>"></td> 
            </tr>
            <tr>
                <td>Asal Sekolah</td>
                <td><input type="text" name="asal_sekolah" value="<?= $peg['asal_sekolah'] ?>"></td> 
            </tr>
            <tr>
                <td>Nama Ayah</td>
                <td><input type="text" name="nama_ayah" value="<?= $peg['nama_ayah'] ?>"></td> 
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td><input type="text" name="nama_ibu" value="<?= $peg['nama_ibu'] ?>"></td> 
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan_orang_tua" value="<?= $peg['pekerjaan_orang_tua'] ?>"></td> 
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_orang_tua" value="<?= $peg['alamat_orang_tua'] ?>"></td> 
            </tr>
            <tr>
                <td>No Hp</td>
                <td><input type="text" name="no_hp_orang_tua" value="<?= $peg['no_hp_orang_tua'] ?>"></td> 
            </tr>
            <tr>
                <td>Nama Wali</td>
                <td><input type="text" name="nama_wali" value="<?= $peg['nama_wali'] ?>"></td> 
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="pekerjaan_wali" value="<?= $peg['pekerjaan_wali'] ?>"></td> 
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_wali" value="<?= $peg['alamat_wali'] ?>"></td> 
            </tr>
            <tr>
                <td>No Hp</td>
                <td><input type="text" name="no_hp_wali" value="<?= $peg['no_hp_wali'] ?>"></td> 
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value="<?= $peg['jurusan'] ?>"></td> 
            </tr>
            <tr>
                <td>ekskul</td>
                <td><input type="text" name="ekskul" value="<?= $peg['ekskul'] ?>"></td> 
                </tr>
            <tr>
            <td>Status</td>
            <td>
            <select type="text" name="upload_ijazah" value="<?= $peg['upload_ijazah'] ?>">
            <option >DI TERIMA</option>
            <option selected="selected">DALAM PROSES</option>
            <option>BERKAS BELUM LENGKAP</option>
            <option>PEMBAYARAN BELUM 50%</option>
            </select>
            </td>
            </tr>
            <tr>
                <td>--</td>
                <td><input type="text" name="upload_foto" value="<?= $peg['upload_foto'] ?>"></td> 
                </tr>
                <tr>
                <td>ID</td>
                <td><input type="text" name="id_pendaftar" value="<?= $peg['id_pendaftar'] ?>"></td> 
        <tr>
            <td>
            <input type="submit" name="submit" value="Ubah Data">
            </td>
            <tr height="80">
            
                </form>
            </tr>
            
        </table>

        <?php
            endforeach;     
            
    }