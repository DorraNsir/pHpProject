
<link rel="stylesheet" href="../assets/css/addBlogpost.css">
        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- Additional CSS Files -->
<link rel="stylesheet" href="../assets/css/fontawesome.css">
<link rel="stylesheet" href="../assets/css/templatemo-stand-blog.css">
<link rel="stylesheet" href="../assets/css/owl.css">
<body>
     <!-- ***** Preloader Start ***** -->
     <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <?php
    session_start(); 
     include("./header.php");?>
    <div class="container">
    <h1 style="margin:15px;">Add BlogPost</h1>
  <div class="row">
    <div class="col-md-12">
      <form method="post" role="form" action="./addBlogPostAction.php" enctype="multipart/form-data">
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
                Browse <input type="file" name="image" id="image" accept="image/*" required>
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
<script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="../assets/js/custom.js"></script>
    <script src="../assets/js/owl.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/isotope.js"></script>
    <script src="../assets/js/accordions.js"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>
    
    <!-- Additional Scripts -->

  </body>