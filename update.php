<?php 

    $con = mysqli_connect('localhost','root','','facebookclone');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check = mysqli_query($con,"UPDATE userdata SET password = '$password'WHERE phonoremail = '$phoneoremail'");
    

    if($check > 0){
        header("Location:http://localhost/facebookclone/mainpage.html");
    }else{
        header("Location:http://localhost/facebookclone");
    }



?>