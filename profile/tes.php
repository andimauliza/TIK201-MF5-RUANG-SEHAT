<!--Query nya disini Start-->
<?php
$sql    = "SELECT * FROM tb_user";
$result = $conn->query($sql);

$id_user           = $_GET['id_user'];
$tb_user           = "SELECT * FROM tb_user WHERE id_user='$id_user'";
$result_tb_user    = $conn->query($tb_user);
$rows                = $result_tb_user->fetch_array();
?>
<!--Query nya disini Stop-->

<br>
<h1>Data user - Edit</h1>
  <br>
    <div class="container-fluid">
    
<!--Form Dimulai-->
<form action="index.php?page=user/update.php" method="post">
      <!--Group Form Start-->
      <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="id_user">ID</label>
            <input type="text" readonly class="form-control" name="id_user" value="<?php echo $rows['id_user']; ?>">
          </div>

        <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="nip_user">NIP</label>
            <input type="text" readonly class="form-control" name="nip_user" value="<?php echo $rows['nip_user']; ?>">
          </div>
        
        <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="nama_user">Nama</label>
            <input type="text" readonly class="form-control" name="nama_user" value="<?php echo $rows['nama_user']; ?>">
          </div>
        
        <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="username_user">Username</label>
            <input type="text" readonly class="form-control" name="username_user" value="<?php echo $rows['username_user']; ?>">
          </div>

        <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="email_user">Email</label>
            <input type="text" readonly class="form-control" name="email_user" value="<?php echo $rows['email_user']; ?>">
          </div>
        
        <div class="form-row">
          <div class="form-group col-lg-2">
            <label for="password">Password</label>
            <input type="text" readonly class="form-control" name="password" value="<?php echo $rows['password']; ?>">
          </div>
      <!--Group Form End-->

        <!--Button Start-->
        <button class="btn btn-primary" type="submit">Update</button>
        <input class="btn btn-danger" type="reset" value="Reset">
        <a href="index.php?page=pasien/index.php" class="btn btn-info" role="button" aria-pressed="true">Kembali</a>
        <!--Button Stop-->
    </form>
    </div>
<!--Form Akhir-->