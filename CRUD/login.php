<?php
include "config.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from auth where username='$username'and password='$password'";
    $result=$conn->query($query);
    if($result->num_rows==1){
        echo"login success";
        header("Location:form.php");
    }
    else{
        echo "unga bunga";
    }
}
?>