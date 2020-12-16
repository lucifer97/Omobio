<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     }  
</style>  
<h5 class="card-header-container">Users Panel</h5>
<body>  

<div class="table-scrol" style=" width: 1600px; padding-left: 300px;"> 
    <h1 align="center">All the Users</h1>  
    <thead>  
    <tr>  
    <table class="table table-dark">
            <th>User Id</th>  
            <th>User Name</th>  
            <th>User E-mail</th>  
            <th>User Pass</th>  
               
        </tr>  
        </thead>  
  
        <?php  
        include("db_conection.php");  
        $view_users_query="select * from users"; 
        $run=mysqli_query($dbcon,$view_users_query);
  
        while($row=mysqli_fetch_array($run)) 
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_email=$row[2];  
            $user_pass=$row[3];  
  
        ?>  
  
        <tr>  

            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_email;  ?></td>  
            <td><?php echo $user_pass;  ?></td>  
           
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</body>  
  
</html>  