<?php

class BlogPostModel {
    private $id, $title, $description, $subject, $image, $username, $password, $email;

    public function __construct($title = "", $description = "", $subject = "", $image = "") {
        $this->title = $title;
        $this->description = $description;
        $this->subject = $subject;
        $this->image = $image;
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getImage() {
        return $this->image;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}
