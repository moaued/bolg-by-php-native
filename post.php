<?php
 include('conn.php');
  include('public/header.php');
  error_reporting(0);
 ?>
    <!-- Start Content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                  <?php
                   $id=$_GET['id'];
                   $query = "SELECT * FROM addpost  WHERE id='$id'";
                       
                        $result = mysqli_query($conn,$query);

                         $row = mysqli_fetch_assoc($result);
                          ?>

                    <div class="post">
                        <div class="post-image">
                            <a href="post.php?id=<?php echo $row['id']; ?>"><img src="uploads/<?php echo $row['postimg']; ?>"></a>
                        </div>
                        <div class="post-title">
                            <h4><a href="post.php?id=<?php echo $row['id']; ?>"><?php echo $row['posttitel']; ?></a></h4>
                        </div>
                        <div class="post-details">
                            <p class="post-info">
                                <span><i class="fas fa-user"></i><?php echo $row['postriter']; ?></span>
                                <span><i class="far fa-calendar-alt"></i><?php echo $row['date']; ?></span>
                                <span><i class="fas fa-tags"></i><?php echo $row['posttype']; ?></span>
                                
                            </p>
                            <p class="postContent">
                              <?php
                               
                                echo $row['post'];

                               ?>
                            </p>
                      
                        </div>
                    </div>

                </div>
                <div class="col-md-3">
                    <!-- Catagories -->
                    <div class="catagories">
                        <h4>التصنيفات</h4>
                        <ul>
                          <?php
                            $query = "SELECT * FROM  `tesn` ORDER BY id DESC";
                            $result = mysqli_query($conn,$query);
                            while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                            <li>
                
                              <a href="category.php?category=<?php echo $row['tesnname']; ?>">
                                    <span><i class="fas fa-tags"></i></span>
                                    <span><?php echo $row['tesnname']; ?></span>
                                </a>
                            </li>
                      <?php
                          }
                        ?>
                        </ul>
                    </div>
                    <!-- End Categories -->

                    <!-- Start Latest Posts -->
                    <div class="last-posts">
                        <h4>أحدث المنشورات</h4>
                        <ul>
                          <?php
                            $query = "SELECT * FROM addpost ORDER BY id DESC LIMIT 5";
                            $result = mysqli_query($conn,$query);
                            while ($row = mysqli_fetch_assoc($result)) {
                              ?>
                            <li>
                                <a href="post.php?id=<?php echo $row['id']; ?>">
                                    <span class="span-image"><img src="uploads/<?php echo $row['postimg']; ?>" alt="image1"></span>
                                    <span><?php echo $row['posttitel']; ?></span>
                                </a>
                            </li>
                            <?php
                                }
                             ?>
                        </ul>
                    </div>
                    <!-- End Latest Posts -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->
<?php
  include('public/footer.php');
 ?>