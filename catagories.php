<?php
session_start();
error_reporting(0);
include 'conn.php';
include 'include/header.php';
$id=$_GET['id'];

$category=$_POST['category'];
$add=$_POST['add'];
if(!isset($_SESSION['id'])){


  echo "<div class='alert alert-success'>" . "لا يمكن الوصول الي هذه الصفحه مباشرة" . "</div";
  header('REFRESH:2;url=login.php');
}
else{
if(isset($add)){
if(empty($category)){
echo"الرجاء مل حقل التصنيف";

}
elseif($category >100){
echo"اسم التصنيف كبير جدا ";


}
else{
  $query="INSERT INTO tesn(tesnname)VALUES ('$category')";
  mysqli_query($conn,$query);
  echo "<div class='alert alert-success'>"  . "تمت إضافة التصنيف" . "</div>";
}

}



?>

    <!--start content-->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2" id="side-area">
            <h4>لوحة التحكم</h4>
            <ul>
              <li>
                <a href="">
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
                  <a href="new-post.php?>">
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
            <div class="add-category">
              <form action="catagories.php" method="POST">
                <div class="form-group">
                  <label for="category">تصنيف جديد</label>
                  <input type="text" name="category" class="form-control" />
                </div>
                <button class="btn-custom" name="add">اضافة</button>
               
              </form>
            </div>
           <div class="display-cat mt-5">
           

<?php
if(isset($id)){
  $query = "DELETE FROM tesn WHERE id = '$id'";
   $delete = mysqli_query($conn,$query);

    if(isset($delete)){
      echo "<div class='alert alert-success'>" . "تم حذف التصنيف بنجاح" . "</div>";
    }
    else{
      echo "<div class='alert alert-danger'>" . "عفواً حدث خطأ ما" . "</div>";
    }
}
 ?>
             <table class="table table-borderd">
                <tr>
                <th>رقم الفئه </th>
                <th>اسم الفئة</th>
                <th>تاريخ الاضافه</th>
                <th>حذف التصنيف</th>
                </tr>
              <?php
              $query="SELECT * FROM tesn ORDER BY id DESC";
              $sql=mysqli_query($conn,$query);

              $no =0;

                while($row = mysqli_fetch_assoc($sql)){
                  $no++;
                ?>

                <tr>
                <td><?php echo $no; ?></td>
                <td><?php  echo $row['tesnname']; ?></td>
                <td><?php echo $row['date'];?></td>
                <td><a href="catagories.php?id=<?php echo $row['id']; ?>"><button class="custom-btn">حذف التصنيف </button><a></td>
                           
                </tr>
                  
              <?php
              }
              ?>
              </table>
              </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
}
?>
                  <?php
              include 'include/footer.php';
              ?>


    