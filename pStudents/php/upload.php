<?php

include 'dbcon.php';


session_start();
$accName=$_SESSION['accName'];


if(isset($_POST['submit'])){

    $fileName= $_FILES['iUpload']['name'];
    $fileTempName= $_FILES['iUpload']['tmp_name'];
    $path= "../files/".$fileName;

    $query= "INSERT INTO files(fileName,userName) VALUES('$fileName','$accName')"; 
    $run=mysqli_query($con,$query);

    if($run){
        move_uploaded_file($fileTempName,$path);
        echo "upload sucessfull!!";
    }else{
        echo "error".mysqli_error($con);
    }


}

?>