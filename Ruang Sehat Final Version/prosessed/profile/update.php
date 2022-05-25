<?php
// session_start();
// Report all PHP errors
error_reporting(E_ALL);

if(isset($_POST['update'])){

        include('../../config/koneksi.php');

         $userNewNip        = $_POST['nip'];
         $userNewNama       = $_POST['nama'];
         $userNewPassword   = $_POST['password'];
         $userImage         = $_FILES['image'];

         $imageName = $userImage['name'];
         

         $sql = "UPDATE tb_admin SET nip = '$userNewNip', nama ='$userNewNama', password = '$userNewPassword', image='$imageName' WHERE nip = '$userNewNip'";

        $results = mysqli_query($conn,$sql);

        header('Location:../../pages/profile.php');
        }
?>

       <!--  if(!empty($userNewNip) && !empty($userNewNama)){

            $imageName = $userImage ['name'];
            $fileType  = $userImage['type'];
            $fileSize  = $userImage['size'];
            $fileTmpName = $userImage['tmp_name'];
            $fileError = $userImage['error'];

            $fileImageData = explode('/',$fileType);
            $fileExtension = $fileImageData[count($fileImageData)-1];

            
            if($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg'){
                //Process Image
                
                if($fileSize < 5000000){
                    //var_dump(basename($imageName));

                    $fileNewName = "img/".$imageName;
                    
                    $uploaded = move_uploaded_file($fileTmpName,$fileNewName);
                    
                    if($uploaded){
                        $loggedInUser = $_SESSION['nip'];
                        
                        $sql = "UPDATE tb_admin SET nip = '$userNewNip', nama ='$userNewNama', password = '$userNewPassword', image='$imageName' WHERE nip = '$loggedInUser'";

                        $results = mysqli_query($conn,$sql);

                        header('Location:dashboard.php?page=profile/index.php');
                    exit;
                    }


                }else{
                    header('Location:dashboard.php?page=profile/index.php?error=invalidFileSize');
                    exit;
                }
                exit;
            }else{
                header('Location:dashboard.php?page=profile/index.php?error=invalidFileType');
                exit;
            }
            

        }else{
            header('Location:dashboard.php?page=profile/index.php?error=emptyNipAndNama');
            exit;
        }
        



}

?>

 -->