<?php
include("../controller/BlogPostController.php");
include("../model/blogPostModel.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Title'], $_POST['subject'], $_POST['desc'])) {
        $title = $_POST['Title'];
        $subject = $_POST['subject'];
        $description = $_POST['desc'];

        if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
            
            $uploadDir = __DIR__ . "/../assets/uploaded_image/";
            $uploadedFileName = basename($_FILES['image']['name']);
            $uploadedFilePath = $uploadDir . $uploadedFileName;
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath)) {
                $blogpost = new BlogPostController();
                $blogpostMod = new BlogPostModel($title, $description, $subject, $uploadedFileName);
                $blogpost->insert($blogpostMod);
                header('Location: HomePage.php');
                exit();
            } else {
                echo "Failed to upload the file.";
            }   
        } else {
            echo "Image file is required.";
        }
    } else {
        echo "One or more form fields are missing.";
    }
}
?>

