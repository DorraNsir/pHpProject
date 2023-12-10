
    <?php 
    include("../controller/blogPost.php");
    $blogpost = new BlogPost();
    $blogposts = $blogpost->liste(); 
    ?>
    <div class="row" >
        <?php foreach ($blogposts as $key => $b):
          ?>
          <form method="post" action="deletePost.php">
          <input type="hidden" name="key" value="<?php echo $b['id']; ?>">
            <div class="col-lg-12" >
                <div class="blog-post">
                    <div class="blog-thumb">
                    <?php 
                  if(isset($_SESSION['username'])):?>
                    <button type="submit" name="sub" style="display:flex;items:end;">
                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
                    </button>
                  <?php endif; ?> 
                        <img src="../assets/images/<?php echo $b['image']?>" alt="" >
                    </div>
                    <div class="down-content">
                        <span><?php echo $b['title']?></span>
                        <a href="post-details.html"><h4><?php echo $b['subject']?></h4></a>
                        <p style="display: -webkit-box;-webkit-box-orient: vertical; overflow: hidden; -webkit-line-clamp: 3;">
                            <?php echo $b['description']?>
                        </p>
                        <div>
                          <p><?php echo $b['created_at']?></p>
                          <a href="./post-details.php?key=<?php echo $b['id']; ?>" style=" text-decoration:none;" >Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        <?php endforeach; ?>
    </div>
