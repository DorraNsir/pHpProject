<?php
include_once("../model/model.php");
class BlogPost extends Modele{
 private $id,$title,$description,$subject,$image;
 function __construct() 
{
parent::__construct();
 }
 function insert($title,$description,$subject,$image){
 $query="insert into blogpost(title,description,subject,image)values (?,?,?,?)";
$res=$this->pdo->prepare($query); 
return $res->execute(array($title,$description,$subject,$image)); 
 }
 function delete($id) {
 $query = "delete from blogpost where id=?";
 $res=$this->pdo->prepare($query); 
return $res->execute(array($id)); 
}
function liste(){
$query = "select * from blogpost";
$res=$this->pdo->prepare($query); 
$res->execute();
return $res;
}
function getBlogpost($id) {
    $query = "SELECT * FROM blogpost WHERE id = ?";
    $res = $this->pdo->prepare($query);
    $res->execute(array($id));
    return $res->fetch();
}
}?>