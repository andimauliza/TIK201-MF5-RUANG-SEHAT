<!-- Start Query--> 
<?php
$sql    = " SELECT  kp.kd_kamarpakai,
                    p.id_pasien,
                    p.nama_pasien,
                    r.id_kamar,
                    r.nama_ruangan,
                    r.kategori,
                    kp.lama_pakai,
                    kp.Tgl_pakai
                    FROM tb_kamarpakai kp, tb_masyarakat p, tb_ruangan r
                    WHERE kp.id_pasien = p.id_pasien
                    AND kp.id_kamar = r.id_kamar
                    ";
$result = $conn->query($sql);
?>
<!--Stop Query-->

<br>
<h1>Data Kamar Yang Sedang Di Pakai</h1>
<div class="float-left"><a href="dashboard.php?page=kamarpakai/new.php" class="btn btn-outline-dark btn-lg my-2 my-sm-0" role="button" aria-pressed="true" class="navbar-brand">Add Data</a></div><br> 
<br><br>

<!--Start Table-->
<table id="tabeldata" class="table table-hover table-bordered table-striped table-active" style="width:100%">
<!--Start Bagian Head-->
  <thead class="thead-dark">
     <tr>
      <th>No.</th>
      <th>KD Kamar Pakai</th>
      <th>ID Pasien</th>
      <th>Nama Pasien</th>
      <!-- <th>NIK</th> -->
      <th>ID Kamar</th>
      <th>Nama Ruangan</th>
  	  <th>Kategori</th>
      <th>Lama Pemakaian</th>
      <th>Tanggal Di Pakai</th>
      <th>Aksi</th>
    </tr>
  </thead>
<!--Stop Bagian Head-->

<!--Start Bagian Body-->
  <tbody>
	<?php $i = 1; ?>
	<?php foreach( $result as $row ) : ?>
    <tr>
      <td><?= $i; ?></td>
      <td><?php echo $row['kd_kamarpakai']; ?></td>
      <td><?php echo $row['id_pasien']; ?></td>
      <td><?php echo $row['nama_pasien']; ?></td>
      <!-- <td><?php echo $row['nik']; ?></td> -->
      <td><?php echo $row['id_kamar']; ?></td>
      <td><?php echo $row['nama_ruangan']; ?></td>
      <td><?php echo $row['kategori']; ?></td>
      <td><?php echo $row['lama_pakai']; ?></td>
      <td><?php echo $row['Tgl_pakai']; ?></td>
	    <td><a href="dashboard.php?page=kamarpakai/edit.php&kd_kamarpakai=<?php echo $row['kd_kamarpakai']; ?>" class="btn btn-info">Edit</a></a>  
	  <a href="dashboard.php?page=kamarpakai/delete.php&kd_kamarpakai=<?php echo $row['kd_kamarpakai']; ?>" class="btn btn-danger">Delete</a>
   </tr>
   <?php $i++; ?>
  <?php endforeach; ?>
  </tbody>
<!--Stop Bagian Body-->

</table>
<!--Stop Table-->


<!-- Start ini coding datatable jangan diganti-->
<script>
$(document).ready(function() {
    $('#tabeldata').DataTable( {
        "scrollY":"530px",
        "scrollCollapse": true,
    } );
} );
</script>
<!--Stop Ini coding datatable jangan diganti