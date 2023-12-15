<?php
include_once("../db/config.php");
class BlogPostController extends Modele{
 function __construct() 
{
parent::__construct();
 }
 function insert(BlogPostModel $blogPostModel){
 $query="insert into blogpost(title,description,subject,image)values (?,?,?,?)";
$res=$this->pdo->prepare($query); 
return $res->execute(array(
    $blogPostModel->getTitle(),
    $blogPostModel->getDescription(),
    $blogPostModel->getSubject(),
    $blogPostModel->getImage(),
)
); 
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
    
public function update(BlogPostModel $blogPost, $postId) {
    try {
        $query = "UPDATE blogpost SET title = :title, description = :description, subject = :subject, image = :image WHERE id = :id";
        
        $stmt = $this->pdo->prepare($query);

        $stmt->bindParam(':title', $blogPost->getTitle());
        $stmt->bindParam(':description', $blogPost->getDescription());
        $stmt->bindParam(':subject', $blogPost->getSubject());
        $stmt->bindParam(':image', $blogPost->getImage());
        $stmt->bindParam(':id', $postId);

        $stmt->execute();

        return true; // Update successful
    } catch (PDOException $e) {
        // Handle the exception (log it, display an error message, etc.)
        echo "Error: " . $e->getMessage();
        return false; // Update failed
    }
}

}?>