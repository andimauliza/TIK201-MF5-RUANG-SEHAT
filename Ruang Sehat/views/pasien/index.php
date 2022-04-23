<!--Start Query-->
<?php
$sql    = " SELECT * FROM tb_pasien";
$result = $conn->query($sql);
?>
<!--Stop Query-->

<br>
<h1>Lihat Data Pasien</h1>
<div class="float-left"><a href="dashboard.php?page=pasien/new.php" class="btn btn-outline-dark btn-lg my-2 my-sm-0" role="button" aria-pressed="true" class="navbar-brand">Add Data</a></div><br> 
<br><br>

<!--Start Table-->
<table id="tabeldata" class="table table-hover table-bordered table-striped table-active" style="width:100%">
<!--Start Bagian Head-->
  <thead class="thead-dark">
     <tr>
      <th>No.</th>
      <th>Id Pasien</th>
      <th>Nama Pasien</th>
      <th>NIK</th>
      <th>No BPJS</th>
  	  <th>Tanggal Lahir</th>
      <th>Tempat Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>No Telepon</th>
      <th>Riwayat Penyakit</th>
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
      <td><?php echo $row['id_pasien']; ?></td>
      <td><?php echo $row['nama_pasien']; ?></td>
      <td><?php echo $row['nik']; ?></td>
      <td><?php echo $row['no_bpjs']; ?></td>
      <td><?php echo $row['tgl_lahir']; ?></td>
      <td><?php echo $row['tempat_lahir']; ?></td>
      <td><?php echo $row['jenis_kelamin']; ?></td>
      <td><?php echo $row['alamat']; ?></td>
      <td><?php echo $row['no_telepon']; ?></td>
      <td><?php echo $row['riwayat_penyakit']; ?></td>
	    <td><a href="dashboard.php?page=pasien/edit.php&id_pasien=<?php echo $row['id_pasien']; ?>" >Edit</a></a> | 
	  <a href="dashboard.php?page=pasien/delete.php&id_pasien=<?php echo $row['id_pasien']; ?>" class="delete" >Delete</a>
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
<!--Stop Ini coding datatable jangan diganti-->