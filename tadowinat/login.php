<?php 
session_start();
include('include/connection.php');
$adminMil=$_POST['email'];
$adminPass=$_POST['password'];
$login =$_POST['log'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>تسجيل الدخول </title>
	<!-- font -->
	<link rel="stylesheet" href="css/font/neo.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-rtl.css">
	<link rel="stylesheet" type="text/css" href="css/dashborde.css">
    <style>
        .login{
            width: 300px;
            margin: 80px auto;
        }
        .login h5{
            color: #555;
            margin-bottom: 20px;
            text-align: center;
            margin-top: 10px;
        }
        .login button{
            margin-right: 80px;
        }
    </style>
</head>
<div class="login">
<?php
    if(isset($login)){
    if(empty($adminMil)|| empty($adminPass)){
        echo"<div class='alert alert-danger'>"."الرجاء ادخال البريد الالكتروني وكلمة السر"."</div>";
    }
    else{
        $query="SELECT * FROM admin WHERE email='$adminMil' AND password='$adminPass'";
        $result=mysqli_query($conn,$query);
        $row=mysqli_fetch_assoc($result);
        if(in_array($adminMil,$row) && in_array($adminPass,$row)){
            echo"<div class='alert alert-success'>"." مرحبا سيتم تحويلك الى لوحة التحكم"."</div>";
            $_SESSION['id']=$row['id'];
            header('REFRESH:2;URL=cateigories.php');

        }
        else{
            echo"<div class='alert alert-danger'>"."البيانات غير متطابقة"."</div>";
        }
    }
}
?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
        <h5>تسجيل الدخول</h5>
        <div class="form-group">
            <label for="mail">البريد الالكتروني</label>
            <input type="text"class="form-control"id="mail"name="email"/>
        </div>
        <div class="form-group">
            <label for="pass"> كلمة السر</label>
            <input type="text"class="form-control"id="pass"name="password"/>
        </div>
            <button class="custom-btn"name="log">تسجيل الدخول</button>
        </div>
    </form>
</div>


</div>
<!-- jquery and Bootstrap .js -->
<script src="js/jquery-3.6.1.min.js"></script>
<script src="js/fontawesome.js"></script>
<script src="js/all.min.js"></script>
<script src="js/fontawesome.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>