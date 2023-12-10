<?php
abstract class Modele {
protected $pdo;
function __construct(){
$this->pdo = new PDO('mysql:host=localhost;dbname=users','root',''); 
// $this->$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
}
function __destruct(){
 $this->pdo=null;
}
}?>
