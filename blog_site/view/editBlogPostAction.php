<?php
include("../controller/BlogPostController.php");
include("../model/blogPostModel.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['edit_post_id'], $_POST['Title'], $_POST['subject'], $_POST['desc'])) {
        $id = $_POST['edit_post_id'];
        $title = $_POST['Title'];
        $subject = $_POST['subject'];
        $description = $_POST['desc'];

        $blogpost = new BlogPostController();
        $blogposts = $blogpost->getBlogpost($id);

        if ($blogposts) {
            if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
                $uploadDir = __DIR__ . "/../assets/uploaded_image/";
                $uploadedFileName = basename($_FILES['image']['name']);
                $uploadedFilePath = $uploadDir . $uploadedFileName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadedFilePath)) {
                    $blogpostMod = new BlogPostModel($title, $description, $subject, $uploadedFileName);
                    $updateSuccess = $blogpost->update($blogpostMod, $id);
                } else {
                    echo "Failed to upload the file.";
                }
            } else {
                $blogpostMod = new BlogPostModel($title, $description, $subject, $blogposts['image']);
                $updateSuccess = $blogpost->update($blogpostMod, $id);
            }

            if ($updateSuccess) {
                header('Location: HomePage.php');
                exit();
            } else {
                echo "Failed to update the blog post.";
            }
        } else {
            echo "Invalid blog post ID.";
        }
    } else {
        echo "One or more form fields are missing.";
    }
}