<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ruang Sehat</title>
	<!-- BOOTSTRAP STYLES-->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <!-- <link href="assets/css/custom.css" rel="stylesheet" /> -->
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
   <style>
       body::after {
           content: '';
           position: absolute;
           width: 100px;
           height: 100px;
           background: url(css/union.png) no-repeat;
           background-size: contain;
           bottom: 0;
       }
   </style>
</head>
<body style="background: linear-gradient(131.29deg, #082032 4.46%, #334756 79.98%);">
    <div class="container" style="height: 100vh;">
        <div class="row" style="height: 100vh;display: flex; align-items: center;">
            <div class="col-md-6 offset-1 text-white">
                <h2 style="font-weight: 700;font-size: 46px;">Let's Get Started</h2>
                <p style="font-weight: 400;font-size: 18px;">Sign in with your account and enjoy the features of<br> RuangSehat</p>
            </div>              
                  <div class="col-md-4">
                        <div class="panel panel-default" style="border-radius: 14px;box-sizing:border-box;padding: 40px;background-color: white;">
                            <div class="panel-heading">
                                <h3>Sign In</h3>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="proses_login.php">
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="nip" placeholder="NIP" style="border:none;border-bottom: 1.5px solid #E5E5E5" />
                                        </div>
                                     <div class="form-group input-group mt-2">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Password" style="border:none;border-bottom: 1.5px solid #E5E5E5" />
                                        </div>
                                    
                                     
                                     <div>   
                                        <br>                               
                                        <input type="submit" name="login" class="btn" style="background-color: #334756;width: 100px;color: white;" value="Login">
                                    </div>
                                    <hr />
                                    Login as Visitor ? <a href="user/home.html" style="text-decoration: none;">click here </a> 
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>