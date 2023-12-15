<?php
include_once("../db/config.php");
class UserController extends Modele{
 private $id,$username,$email,$password;
 function __construct() 
{
parent::__construct();
 }
 function insert(UserModel $user){
 $query="insert into users(username,email,password)values (?,?,?)";
$res=$this->pdo->prepare($query); 
return $res->execute(array(
    $user->getUsername(),
    $user->getEmail(),
    $user->getPassword()
)); 
 }
 function delete($id) {
 $query = "delete from users where id=?";
 $res=$this->pdo->prepare($query); 
return $res->execute(array($id)); 
}
function liste(){
$query = "select * from users";
$res=$this->pdo->prepare($query); 
$res->execute();
return $res;
}
function getUser($id) {
    $query = "SELECT * FROM users WHERE id = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    return $res->fetch();
}
function checkLogin(UserModel $user)
{
    $query = "SELECT * FROM users WHERE email=? AND password=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array(
        $user->getEmail(),
        $user->getPassword()
    ));
    return $res;
}

}?>