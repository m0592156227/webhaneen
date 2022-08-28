<?php
if($_SERVER['REQUEST_METHOD']=='POST'){}
    // $email=$_POST['email'];
    // $password=$_POST['password'];
    // if(isset($_POST['submit'])){
    //     $submit=true;
    // }else{
    //     $agree=false;
    // }
    if(isset($_POST['email'])&& isset($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(empty($email) && empty($password)){
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){}
        }
    }
    
?>