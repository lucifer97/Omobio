<?php  
  
  include("db_conection.php"); 
if(isset($_POST['register']))  
{  
    $user_name=$_POST['name'];
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];
  
  
    if($user_name=='')  
    {  
    
        echo"<script>alert('Please enter the name')</script>";  
exit();
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
    exit();  
    }  

    $check_email_query="select * from users WHERE user_email='$user_email'";  
    $run_query=mysqli_query($dbcon,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
 
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";  
    if(mysqli_query($dbcon,$insert_user))  
    {  
        echo"<script>window.open('login.php','_self')</script>";  
    }  
} 
?>  

<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>  


<body>
 

<h5 class="card-header">Registration Form</h5>
  </div>
  <div class="container" style="padding-left: 200px;">
        <div class="row" style="padding-top: 20px;">  
            <div class="col-lg-8 col-offset-2">

       <form role="form" method="post" action="registration.php" class="was-validated">  
           <div class="form-group">
              <label for="name">User Name:</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Username" name="name" required>
              <div class="valid-feedback">Valid.</div>
              <div class="invalid-feedback">Please fill out this field.</div>
            </div>

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
              <div >
              <input class="btn btn-primary" type="submit" value="register" name="register" >   <b>Already registered ?</b> <a href="login.php">Login here</a></div>
       </form>
     </div>
      </div>
        </div>
          </div>
      </div>
<br><br>
  
</body>  
  
</html>  
  
