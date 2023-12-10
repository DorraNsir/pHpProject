
<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="HomePage.html"><h2>Stand Blog<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="HomePage.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="./about.php">About Us</a>
              </li>
              <?php 
              // session_start();  
              if(isset($_SESSION['username'])):?>
              <li class="nav-item">
                <a class="nav-link" href="./addBlogpost.php">Add BlogPost</a>
              </li>
              <li class="nav-item">
              <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>
                <a class="nav-link" href="HomePage.php" style="color:orange"><?php echo $_SESSION['username'];?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./logout.php">Logout</a>
              </li>
              <?php else: ?>
                <li class="nav-item">
                <a class="nav-link" href="./registre.php">Sign Up</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="./pdo_login.php">Login</a>
                </li>
                <?php endif; ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>