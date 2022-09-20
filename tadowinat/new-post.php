<?php
include("include/connection.php");
include("include/header.php");

$pTitle=$_POST['title'];
$pCat=$_POST['category'];
$pContent=$_POST['content'];
$pAuthor="عبدالله محمد";
$pAdd=$_POST['add'];

//post image
$imageName=$_FILES['postImage']['name'];
$imageTmp=$_FILES['postImage']['tmp_name'];


?>
<!-- start content -->
<div class="content">
  <div class="container-fluid">
   <div class="row">
        <div class="col-md-2" id="side-area">
            <h4>لوحة التحكم</h4>
            <ul>
                <li>
                    <a href="cateigories.php">
                        <span><i class="fas fa-tags"></i></span>
                        <span>التصنيفات</span>
                    </a>
                </li>
                <!-- Article -->
                <li  data-bs-toggle="collapse"href="#menu">
                    <a href="#">
                        <span><i class="fas fa-newspaper"></i></span>
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
                            <span> كل المقالات</span>
                        </a>
                    </li>
                </ul>
                <li>
                    <a href="index.php"target="_blank">
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
    <button class="custom-btn">مقال جديد</button>
    <div class="add-category">
        <?php 
        if(isset($pAdd)){
            if(empty($pTitle)|| empty($pContent)){
                echo"<div class='alert alert-danger'>"."الرجاء ملء الحقول"."</div>";
            }
            elseif($pContent>10000){
                echo"<div class='alert alert-danger'>"."محتوى المنشور كبير جدا"."</div>";
            }
            else{
                $postImage=rand(0,1000)."_".$imageName;
                move_uploaded_file($imageTmp,"uploads\\".$postImage);
                $query="INSERT INTO posts(postTitle,postCat,postImage,postContent,postAuthor) 
                VALUES ('$pTitle','$pCat','$postImage','$pContent','$pAuthor')";
                $res=mysqli_query($conn,$query);
                if(isset($res)){
                    echo"<div class='alert alert-success'>"."تمت اضافة المنشور"."</div>";
                }
                else{
                    echo"<div class='alert alert-danger'>"."حدث خطأ ما"."</div>";
                }
            }
            }
            ?>
        <form action="<?php $_SERVER['PHP_SELF'];?>"method="POST"enctype="multipart/form-data">
          <div class="form-group">
              <label for="title">عنوان المقال</label>
              <input type="text"name="title"class="form-control">
          </div>
          <div class="form-group">
            <label for="title">التصنيف</label>
            <select name="category" id="cate"class="form-control">
                <?php
                $query="SELECT * FROM categories";
                $res=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <option>
                        <?php echo $row['categoryName'];?>
                    </option>
                    <?php
                }
                ?>
        </select>
        </div>
        <div class="form-group">
            <label for="image">صورة المقال</label>
            <input type="file"id="image"class="form-control"name="postImage">
        </div>
        <div class="form-group">
            <label for="content">نص المقال</label>
            <textarea name="content" id="" cols="30" rows="10"class="form-control"></textarea>
        </div>
          <button class="custom-btn "name="add">نشر المقال</button>
        </form>
    </div>
</div>
</body>
</html>