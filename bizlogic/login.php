<?php  
session_start();
  
?>  
  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     
</head>  

  
<body>  

<h5 class="card-header"> Login Form</h5>
  </div>
  <div class="container" style="padding-left: 200px;">
        <div class="row" style="padding-top: 20px;">  
            <div class="col-lg-8 col-offset-2">

        <form role="form" method="post" action="login.php" class="was-validated">  
        
              <div class="form-group">
                <label for="id_ps">Email:</label>
                <input type="email" class="form-control" name="email" placeholder="Enter Email" name="email" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>


              <div class="form-group">
                <label for="tel">Password:</label>
                <input type="password" class="form-control" name="pass" placeholder="Enter Password" name="pass" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              
			          <input class="btn btn-primary" type="submit" value="login" name="login" > </div>
        </form>
    </div>
 </div>
      
<br><br>


</body>
</html>  
  
<?php  
  
include("db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email; 
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>  