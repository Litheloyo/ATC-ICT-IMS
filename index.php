<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="images/logo.png">
    <title>IMS</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="" class="form-signin" method="post">
						<div class="account-logo">
                            <a href="#"><img src="images/logo.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                       
                        <div class="form-group text-center">
                            <input type="submit" name="login" class="btn btn-primary account-btn" value="login">
                        </div>
 <?php
include('connect.php');
error_reporting(1);

						if(isset($_POST['login']))
						{
							$email=$_POST['username'];
							$password=$_POST['password'];
						{
							$result = mysqli_query($con,"SELECT * FROM user WHERE username = '$email' and password='$password'")
							or die(mysqli_error());
							
							$row = mysqli_fetch_array($result);
							$level = $row['level'];
                            $status = $row['status'];
							$count = mysqli_num_rows($result);				
								if ($count == 0) 
									{
									echo "user not verified";
									} 
								else if ($count > 0)
									{
										session_start();
										$_SESSION['userid'] = $row['userid'];
				                         $_SESSION['username'] = $row['username'];
				                         $_SESSION['level']= $row['level'];
                                    
                                    if($level == 'hod' && $status == 'active'){
                                        
                                         header("location:dash.php");
                                    }
                                    elseif($level == 'hod' && $status == 'deactive'){
                                        echo "your account is deactivated or ";
                                    }
                                    
                                        
                                    
                                    }
                                    if($level== 'skeeper' && $status == 'active'){
                                        
										   header("location:stk_dashboard.php");
                                    }
                            elseif($level == 'skeeper' && $status == 'deactive'){
                                        echo "your account is deactivated or ";
                                    }
                                
                                  else{
                                      echo"wrong username or password";
                                  }
										
									}
									}
                        
				
									?>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>