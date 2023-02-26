<?php
include 'dbcon.php';



if (isset($_POST['uName']) && isset($_POST['passW'])){

    $uName= $_POST['uName'];
    $passW= $_POST['passW'];
    session_start();
    $_SESSION['accName']=$uName;
}
else{
    $uName="none";
    $passW = "none";
}
$query="SELECT * from studentdata where username='$uName' and password='$passW'";


$pass=mysqli_query($con,$query);

if(mysqli_num_rows($pass)==1){
    header("location: ../php/welcome.php");
}
if ( isset($_POST['uName']) && mysqli_num_rows($pass)!=1)  {
    echo "<div class='err' id='err'>You entered the wromg user name or password</div><br>";
   // echo mysqli_num_rows($pass);
   // echo $uName,$passW;
}
?>