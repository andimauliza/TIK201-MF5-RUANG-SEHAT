<!--Start Query-->
<?php
    include('config/koneksi.php');
?>
<!--Stop Query--> 

        <div class="content">
            <h1 style="margin-left: -300px;margin-top: -70px">Account Settings</h1>

            <!-- <?php
                if($_GET['success']){
                    if($_GET['success'] == 'userUpdated'){
                        ?>
                        <small class="alert alert-success"> User updated Successfully</small>
                        <hr>
                        <?php
                    }
                }


                if(isset($_GET['error'])){

                    if($_GET['error'] == 'emptyNipAndNama'){
                        ?>
                        <small class="alert alert-danger"> Nip and Name is required</small>
                        <hr>
                        <?php
                    }else if($_GET['error'] == 'invalidFileType'){
                        ?>
                        <small class="alert alert-danger"> Invalid file type, Only Images allowed.</small>
                        <hr>
                        <?php
                    }else if($_GET['error'] == 'invalidFileSize'){
                        ?>
                        <small class="alert alert-danger"> Maximum 5mb Image size allowed.</small>
                        <hr>
                        <?php
                    }
                }
            ?> -->
            <form action="dashboard.php?page=profile/update.php" method="POST" enctype="multipart/form-data">

                <?php
                    $currentUser = $_SESSION['nip'];
                    $sql = "SELECT * FROM tb_admin WHERE nip ='$currentUser'";


                    $gotResuslts = mysqli_query($conn,$sql);

                    if($gotResuslts){
                        if(mysqli_num_rows($gotResuslts)>0){
                            while($row = mysqli_fetch_array($gotResuslts)){
                                //print_r($row['user_name']);
                                ?>
                        <div class="menuatas" style="background-color: #F8F8F8; width: 630px; height: 300px; margin-left: -300px; margin-top: 50px; padding: 40px 40px 30px 40px;">
                            <h3>Profile Details</h3>
                            <div class="row">
                                
                                <div class="col-2 profilepicture" >
                                    <img src="img/<?= $row['image'] ?>" width="80px" alt="profile picture">
                                </div>
                                <div class="col-8 mb-3 mt-3">
                                    <input class="form-control" type="file" name="image">
                                    <label for="image" class="form-label">*Image size should be max 5 mb.</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-6 mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" class="form-control" name="nip" value="<?php echo $row['nip']; ?>" readonly>
                                </div>
                                <div class="col-md-6 mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
                                </div>
                            </div>    
                        </div>

                        <div class="menubawah" style="background-color: #F8F8F8; width: 630px; height: 250px; margin-left: -300px; margin-top: 50px; padding: 40px 40px 30px 40px;">
                            <h4>Change Password</h4>
                            <p>You can change your password by clicking the button below</p>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password"value="<?php echo $row['password']; ?>" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                </div>
                                <button type="save" class="btn btn-secondary btn-lg" value="update" name="update">Save</button>

                        
                        </div>
                        <?php
                                }
                            }
                        }


                    ?>
            </form>
        </div>
    
