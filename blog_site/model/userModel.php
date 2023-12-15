<?php


class UserModel{
    private $id,$username,$email,$password;
    
    public function __construct( $email="",$username="",$password="",) {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }
    public function getId(){
        return $this->id;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
       $this->email= $email;
    }
    
    public function setUserName($username){
        $this->username = $username;
    }
    
    public function setPassword($password){
        $this->password = $password;
    }
    
    public function setId($id){
       $this->bio = $id;
    }
    
}