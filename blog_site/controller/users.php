<?php
include_once("../model/model.php");
class Users extends Modele{
 private $id,$username,$email,$password;
 function __construct() 
{
parent::__construct();
 }
 function insert($username,$email,$password){
 $query="insert into users(username,email,password)values (?,?,?)";
$res=$this->pdo->prepare($query); 
return $res->execute(array($username,$email,$password)); 
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
function checkLogin($email, $password)
{
    $query = "SELECT * FROM users WHERE email=? AND password=?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($email, $password));
    return $res;
}

}?>