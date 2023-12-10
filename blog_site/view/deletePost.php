<?php
include("../controller/blogPost.php");

if (isset($_POST['sub'])) {
    $b = new BlogPost();
    $id = $_POST['key'];
    $b->delete($id);
}

header('Location: HomePage.php');
?>
