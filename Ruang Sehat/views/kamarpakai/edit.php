<!--Query nya disini Start-->
<?php
$id_pasien = mysqli_query($conn, "SELECT nama_pasien, id_pasien FROM tb_masyarakat");
$id_kamar = mysqli_query($conn, "SELECT nama_ruangan, id_kamar FROM tb_ruangan");

$sql    = "SELECT * FROM tb_kamarpakai";
$result = $conn->query($sql);

$kd_kamarpakai            = $_GET['kd_kamarpakai'];
$tb_kamarpakai            = "SELECT * FROM tb_kamarpakai WHERE kd_kamarpakai='$kd_kamarpakai'";
$result_tb_kamarpakai     = $conn->query($tb_kamarpakai);
$rows                     = $result_tb_kamarpakai->fetch_array();
?>
<!--Query nya disini Stop-->

<br>
<h1>Data Kamar Pakai- Edit</h1>
  <br>
    <div class="container-fluid">
    
<!--Form Dimulai-->
<form action="dashboard.php?page=kamarpakai/update.php" method="post">
      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="kd_kamarpakai">KD Kamar Pakai</label>
            <input type="text" readonly class="form-control" name="kd_kamarpakai" value="<?php echo $rows['kd_kamarpakai']; ?>">
          </div>

        <div class="form-group col-md-6">
          <label for="id_pasien">ID Pasien</label>
          <input type="text" readonly class="form-control" name="id_pasien" value="<?php echo $rows['id_pasien']; ?>">
        </div>      
      </div>
      <!--Group Form End-->

      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="id_kamar">ID Kamar</label>
            <input type="text" readonly class="form-control" name="id_kamar" value="<?php echo $rows['id_kamar']; ?>">
          </div>

          <div class="form-group col-md-3">
            <label for="lama_pakai">Lama Pemakaian</label>
            <input type="text" class="form-control" name="lama_pakai" value="<?php echo $rows['lama_pakai']; ?>">
          </div>

          <div class="form-group col-md-3">
            <label for="Tgl_pakai">Tanggal Di Pakai</label>
            <input type="date" class="form-control" name="Tgl_pakai" value="<?php echo $rows['Tgl_pakai']; ?>">
          </div>
      </div>
      <!--Group Form End-->

      
        <!--Button Start-->
        <button class="btn btn-primary" type="submit">Update</button>
        <input class="btn btn-danger" type="reset" value="Reset">
        <a href="dashboard.php?page=kamarpakai/index.php" class="btn btn-info" role="button" aria-pressed="true">Kembali</a>
        <!--Button Stop-->
    </form>
    </div>
<!--Form Akhir-->