<?php
error_reporting(0);
include 'conn.php';
include 'include/header.php';
 $title=$_POST['title'];
$category=$_POST['category'];
$post=$_POST['post'];
$postauther="مصطفي عايد ";
$add=$_POST['add'];
//image
$imgname=$_FILES['postimg']['name'];
$imgtmp=$_FILES['postimg']['tmp_name'];








?>
<!--start content-->
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2" id="side-area">
              <h4>مقال جديد</h4>
              <ul>
                <li>
                  <a href="catagories.php">
                    <span><i class="fas fa-tags"></i></span>
                    <span>التصنفات</span>
                  </a>
                </li>
                <!--articles-->
                <li data-toggle="collapse" data-target="#menu">
                  <a href="#">
                    <span><i class="far fa-newspaper"></i></span>
                    <span>المقالات</span>
                  </a>
                </li>
                <ul class="collapse" id="menu">
                  <li>
                    <a href="new-post.php">
                      <span><i class="far fa-edit"></i></span>
                      <span>مقال جديد</span>
                    </a>
                  </li>
                  <li>
                    <a href="posts.php">
                      <span><i class="fas fa-th-large"></i></span>
                      <span>كل المقالات</span>
                    </a>
                  </li>
                </ul>
                <li>
                <a href="index.php" target="_balnk">
                    <span><i class="fas fa-window-restore"></i></span>
                    <span>عرض الموقع</span>
                  </a>
                </li>
                <li>
                  <a href="logout.php">
                    <span><i class="fas fa-sign-out-alt"></i></span>
                    <span>تسجيل الخروج</span>
                  </a>
                </li>
              </ul>
            </div>

            <div class="col-md-10" id="main-area">
                <button class="btn-custom">مقال جديد</button>
                <div class="add-category category1">
                <?php
               if(isset($add)){
                if(empty($title) || empty($post)){
                    echo "<div class='alert alert-danger'>" . "الرجاء ملء الحقول أدناة" . "</div>";
                }
                elseif($post > 10000){
                    echo "<div class='alert alert-danger'>" . "محتوي المنشور كبير جداً" . "</div>";
                }
                else{
                    $postimg = rand(0,1000) . "_" . $imgname;
                    move_uploaded_file($imgtmp , "uploads\\" . $postimg);

                    $query ="INSERT INTO addpost(posttitel,posttype,postimg,post,postriter) 
                    VALUES('$title','$category','$postimg','$post','$postauther')";
                     $res = mysqli_query($conn,$query);

                     if(isset($res)){
                         echo "<div class='alert alert-success'>" . "تمت إضافة المنشور بنجاح" . "</div>";
                     }
                     else{
                         echo "<div class='alert alert-danger'>" . "حدث خطأ ما" . "</div>";
                     }
                }

              }
                

                ?>
                  <form action="new-post.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="title">عنوان المقال</label>
                      <input type="text" name="title" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="cate">التصنيف</label>
                        <select name="category" id="cate" class="form-control">
                           <?php

                              $query="SELECT * FROM tesn ";
                              $sql=mysqli_query($conn,$query);


                                while($row = mysqli_fetch_assoc($sql)){
                                  ?>
                                  <option>
                                      <?php echo $row['tesnname']; ?>
                                  </option>
                                      <?php
                                  }
                              
                                
                           ?>
                           
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="image">صورة المقال</label>
                          <input type="file" id="image" name="postimg" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="content">نص المقال</label>
                          <textarea cols="30" rows="10" name="post" class="form-control"></textarea>
                      </div>
                    <button class="btn-custom" name="add">نشر المقال</button>
                  </form>
                </div>
              </div>













    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
