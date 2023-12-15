<?php  
include("../controller/UserController.php");
include("../model/userModel.php");
session_start();  
 $message = "";  
 try  
 {  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["email"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $password = $_POST['password'];
                $email=$_POST['email'];
                $user = new UserController();
                $userMod = new UserModel($email,'',$password);
                $res = $user->checkLogin($userMod);
                if ($res->rowCount() > 0) {
                    $row=$res->fetch(PDO::FETCH_ASSOC);
                    $_SESSION["username"] = $row['username']; 
                    header("location: HomePage.php");
                    exit();
                } else {
                    $message = '<label>Wrong Data</label>';
                }
            
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>  
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title> Login </title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="../assets/css/fontawesome.css">
<link rel="stylesheet" href="../assets/css/templatemo-stand-blog.css">
<link rel="stylesheet" href="../assets/css/owl.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
</head>  
<body>  
    <div style="">
    
    <?php
    
     include("./header.php");?>
    </div>


    <div class="container mt-5" >  

        <?php  
        if(isset($message))  
        {  
            echo '<div class="alert alert-danger">'.$message.'</div>';  
        }  
        ?>  
        <div class="card mx-auto" style="width: 300px;">  
            <div class="card-body">  
                <h3 class="card-title text-center">Login </h3>  
                <form method="post" action="pdo_login.php">  
                    <div class="form-group">  
                        <label for="email">Email</label>  
                        <input type="email" name="email" class="form-control" />  
                    </div>  
                    <div class="form-group">  
                        <label for="password">Password</label>  
                        <input type="password" name="password" class="form-control" />  
                    </div>  
                    <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>  
                </form>  
            </div>  
        </div>  
    </div>  
</body>  
</html>  



 