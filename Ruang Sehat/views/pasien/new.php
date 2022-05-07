 <!--Query nya disini Start-->
<?php
$sql    = "SELECT * FROM tb_pasien";
$result = $conn->query($sql);
?>
 <!--Query nya disini Stop-->

 <br>
 <h1>Data Pasien - Input</h1>
  <br>
    <div class="container-fluid">

<!--Form Dimulai-->
    <form action="dashboard.php?page=pasien/create.php" method="post">

      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="id_pasien">ID</label>
            <input type="text" class="form-control" name="id_pasien" placeholder="ID-XX" required>
          </div>

          <div class="form-group col-lg-2">
            <label for="nama_pasien">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Lengkap">
        </div>
      </div>
      <!--Group Form End-->

      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" name="nik" placeholder="NIK" required>
          </div>

          <div class="form-group col-lg-2">
            <label for="no_bpjs">NO BPJS</label>
            <input type="text" class="form-control" name="no_bpjs" placeholder="NO PBJS">
        </div>
      </div>
      <!--Group Form End-->

      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" required>
          </div>

          <div class="form-group col-lg-2">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Ex : Banda Aceh">
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
           </select>
         </div>
      </div>
    <!--Group Form End-->

    <!--Group Form Start-->
       <div class="form-row">
        <div class="form-group col-lg-4">
          <label for="alamat">Alamat</label>
          <textarea rows="7" class="form-control" name="alamat" placeholder="Contoh: Darussalam"></textarea>
        </div>
      </div>
      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="no_telepon">NO Telepon</label>
            <input type="text" class="form-control" name="no_telepon" placeholder="NO Telepon" required>
          </div>

          <div class="form-group col-lg-2">
            <label for="riwayat_penyakit">Riwayat Penyakit</label>
            <input type="text" class="form-control" name="riwayat_penyakit" placeholder="Riwayat Penyakit">
        </div>
      </div>
      <!--Group Form End-->
    <!--Group Form End-->

        <!--Button Start-->
        <button class="btn btn-primary" type="submit">Save</button>
        <input class="btn btn-danger" type="reset" value="Reset">
        <!--Button Stop-->

        <a href="dashboard.php?page=pasien/index.php" class="btn btn-info" role="button" aria-pressed="true">Back</a>

    </form>
    <br> <br>
    </div>
<!--Form Akhir-->
