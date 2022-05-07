<!--Query nya disini Start-->
<?php
$sql    = "SELECT * FROM tb_pasien";
$result = $conn->query($sql);

$id_pasien           = $_GET['id_pasien'];
$tb_pasien           = "SELECT * FROM tb_pasien WHERE id_pasien='$id_pasien'";
$result_tb_pasien    = $conn->query($tb_pasien);
$rows                = $result_tb_pasien->fetch_array();
?>
<!--Query nya disini Stop-->

<br>
<h1>Data Pasien - Edit</h1>
  <br>
    <div class="container-fluid">
    
<!--Form Dimulai-->
<form action="dashboard.php?page=pasien/update.php" method="post">
      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="id_pasien">ID</label>
            <input type="text" readonly class="form-control" name="id_pasien" value="<?php echo $rows['id_pasien']; ?>">
          </div>

        <div class="form-group col-lg-2">
          <label for="nama_pasien">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama_pasien" value="<?php echo $rows['nama_pasien']; ?>">
        </div>      
      </div>
      <!--Group Form End-->

      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name="nik" value="<?php echo $rows['nik']; ?>">
          </div>

          <div class="form-group col-lg-2">
            <label for="no_bpjs">NO BPJS</label>
            <input type="text" class="form-control" name="no_bpjs" value="<?php echo $rows['no_bpjs']; ?>">
        </div>
      </div>
      <!--Group Form End-->

      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $rows['tgl_lahir']; ?>">
          </div>

          <div class="form-group col-lg-2">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $rows['tempat_lahir']; ?>">
        </div>
      </div>
      <!--Group Form End-->

      <!--Group Form Start-->
      <div class="form-row">
	    	<div class="form-group col-lg-4">
          <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" required name="jenis_kelamin">
              <option value="">- Pilih -</option>
			        <option value="Laki-Laki">Laki-Laki</option>
			        <option value="Perempuan">Perempuan</option>
           </select required>
         </div>
      </div>
      <!--Group Form End-->
          
      <!--Group Form Start-->    
      <div class="form-row">
        <div class="form-group col-lg-4">
          <label for="alamat">Alamat</label>
          <textarea rows="7"  class="form-control" name="alamat"> <?php echo $rows['alamat'] ?></textarea>
        </div>
      </div>
      <!--Group Form End-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="no_telepon">NO Telepon</label>
            <input type="text" class="form-control" name="no_telepon" value="<?php echo $rows['no_telepon']; ?>">
          </div>

          <div class="form-group col-lg-2">
            <label for="riwayat_penyakit">Riwayat Penyakit</label>
            <input type="text" class="form-control" name="riwayat_penyakit" value="<?php echo $rows['riwayat_penyakit']; ?>">
        </div>
      </div>

        <!--Button Start-->
        <button class="btn btn-primary" type="submit">Update</button>
        <input class="btn btn-danger" type="reset" value="Reset">
        <a href="dashboard.php?page=pasien/index.php" class="btn btn-info" role="button" aria-pressed="true">Kembali</a>
        <!--Button Stop-->
    </form>
    <br> <br>
    </div>
<!--Form Akhir-->