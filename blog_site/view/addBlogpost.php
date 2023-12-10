<?php
include("../controller/blogPost.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Title'], $_POST['subject'], $_POST['desc'], $_POST['image'])) {
        $title = $_POST['Title'];
        $subject = $_POST['subject'];
        $description = $_POST['desc'];
        $image = $_POST['image'];

        $blogpost = new BlogPost();
        $blogpost->insert($title, $description, $subject, $image);
        header('Location: HomePage.php');
        exit(); 
    } else {
        echo "One or more form fields are missing.";
    }
}
?>

<link rel="stylesheet" href="../assets/css/addBlogpost.css">
        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="../assets/css/fontawesome.css">
<link rel="stylesheet" href="../assets/css/templatemo-stand-blog.css">
<link rel="stylesheet" href="../assets/css/owl.css">
<body>
     <!-- ***** Preloader Start ***** -->
     <!-- <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>   -->
    <!-- ***** Preloader End ***** -->
    <?php
    session_start(); 
     include("./header.php");?>
    <div class="container">
    <h1 style="margin:15px;">Add BlogPost</h1>
  <div class="row">
    <div class="col-md-12">
      <form method="post" role="form" action="./addBlogpost.php">
        <div class="form-group">
        <label for="title"> Title </label>
          <input type="text" class="form-control" name="Title" placeholder="Title"/>
        </div>
        <div class="form-group">
        <label for="subject"> Subject</label>
          <input type="text" class="form-control" name="subject" placeholder="Subject"/>
        </div>
        <div class="form-group">
          <label> Image </label>
          <div class="input-group">
            <span class="input-group-btn">
              <span class="btn btn-primary btn-file">
                Browse <input type="file" name="image" multiple >
              </span>
             </span>
            <input type="text" class="form-control" readonly>
           </div>
        </div>
        <div class="form-group">
        <label for="desc"> Description </label>
          <textarea class="form-control bcontent" name="desc"></textarea>
        </div>
        <div class="form-group">
        <button type="submit" name="sub" style="background-color: #ffae63; border-radius: 5px;width:100px; ">Enregistrer</button>
        <button type="reset" name="res" style="background-color: #ffae63; border-radius: 5px;width:100px">Annuler</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include("./footer.php");?>
    <script src="../assets/js/addblogpost.js"></script>
    <script src="../assets/js/custom.js"></script>
    
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Additional Scripts -->

  </body>