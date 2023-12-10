<?php
include("../controller/users.php");
session_start();
$message = "";

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST["username"]) || empty($_POST["password"]) || empty($_POST["email"])) {
            $message = '<label>All fields are required</label>';
        } else {
            $username = $_POST['username'];
            // $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
            $email = $_POST['email'];
            
            $user = new Users();
            $user->insert($username, $email, $password);

            header("location: HomePage.php");
            exit();
        }
    }
} catch (PDOException $error) {
    $message = $error->getMessage();
}
?>
 
<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title> Register </title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>  
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="../assets/css/fontawesome.css">
<link rel="stylesheet" href="../assets/css/templatemo-stand-blog.css">
<link rel="stylesheet" href="../assets/css/owl.css">
</head>  
<body>  
<div style="">
    <?php include("./header.php");?>
    </div>
    <div class="container mt-5">  
        <?php  
        if(isset($message))  
        {  
            echo '<div class="alert alert-danger">'.$message.'</div>';  
        }  
        ?>  
        <div class="card mx-auto" style="width: 300px;">  
            <div class="card-body">  
                <h3 class="card-title text-center">create account </h3>  
                <form method="post" action="registre.php">  
                    <div class="form-group">  
                        <label for="username">Username</label>  
                        <input type="text" name="username" class="form-control" />  
                    </div>  
                    <div class="form-group">  
                        <label for="email">Email</label>  
                        <input type="email" name="email" class="form-control" />  
                    </div>  
                    <div class="form-group">  
                        <label for="password">Password</label>  
                        <input type="password" name="password" class="form-control" />  
                    </div>  
 
                    <!-- <div class="form-group">  
                        <label for="PC">Password Confirmation </label>  
                        <input type="password" name="PC" class="form-control" />  
                    </div>   -->

                    <button type="submit" name="login" class="btn btn-primary btn-block">create</button>  
                </form>  
            </div>  
        </div>  
    </div>  
</body>  
</html>  

