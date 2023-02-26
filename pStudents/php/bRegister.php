<?php

include 'dbcon.php';

if(!$con){
    die("connection was not sucessfull: ".mysqli_connect_error());
}


//sign up

$userName=$_POST['input1'];
$password=$_POST['input3'];

echo"<br>";



$qUsername="SELECT * from studentdata where username='$userName'";
$uCheck=mysqli_query($con,$qUsername);

if(mysqli_num_rows($uCheck)>0){
    die("<div style='color:red;font-size:50px;margin-top:30px'>username alerady exist!<br> Please enter different username</div>");
}else{
    $sql="INSERT INTO studentdata (userName,password) VALUES('$userName','$password')";
    $qur=mysqli_query($con,$sql);

    if($qur){
        echo "<div style='color:light-green;font-size:50px;'>record added sucessfully</div>";
    }else{
        echo "error: ".mysqli_connect_error()." ";
    }
}




?>