<?php
include("../controller/BlogPostController.php");

if (isset($_POST['sub'])) {
    $b = new BlogPostController();
    $id = $_POST['key'];
    $b->delete($id);
}
header('Location: HomePage.php');
?>
