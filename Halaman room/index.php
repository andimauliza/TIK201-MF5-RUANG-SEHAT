<!--Start Query-->
<?php
$sql    = " SELECT * FROM tb_ruangan";
$result = $conn->query($sql);
?>
<!--Stop Query-->

<br>
<h1>Data Kamar</h1>
<div class="float-left"><a href="dashboard.php?page=kamar/new.php" class="btn btn-outline-dark btn-lg my-2 my-sm-0" role="button" aria-pressed="true" class="navbar-brand">Add Data</a></div><br> 
<br><br>

<!--Start Table-->
<table id="tabeldata" class="table table-hover table-bordered table-striped table-active" style="width:100%">
<!--Start Bagian Head-->
  <thead class="thead-dark">
     <tr>
      <th>No.</th>
      <th>Id Kamar</th>
      <th>Nama Kamar</th>
      <th>Kategori</th>
      <th>TV</th>
  	  <th>Meja Makan</th>
      <th>Kamar Mandi</th>
      <th>AC</th>
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
      <td><?php echo $row['id_kamar']; ?></td>
      <td><?php echo $row['nama_ruangan']; ?></td>
      <td><?php echo $row['kategori']; ?></td>
      <td><?php echo $row['tv']; ?></td>
      <td><?php echo $row['meja_makan']; ?></td>
      <td><?php echo $row['kamar_mandi']; ?></td>
      <td><?php echo $row['ac']; ?></td>
	    <td><a href="dashboard.php?page=kamar/edit.php&id_kamar=<?php echo $row['id_kamar']; ?>">Edit</a></a> | 
	  <a href="dashboard.php?page=kamar/delete.php&id_kamar=<?php echo $row['id_kamar']; ?>" class="delete">Delete</a>
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