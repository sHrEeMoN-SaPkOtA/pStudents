<?php
include 'login.php';
session_start();
$username=$_SESSION['accName'];
if($username==""){
    header('login.php');
}
include 'dbcon.php';


echo $_SESSION['accName'];
?>

    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 


    <form action="../php/upload.php" method="post" name="upload" enctype="multipart/form-data">

        <label for="iUpload"></label><input type="file" name="iUpload" ><br>
        <button type="submit" name="submit">Upload</button>
    </form>

    <?php
    $query2="SELECT *FROM files";
    $run2=mysqli_query($con,$query2);
    
    while($rows = mysqli_fetch_assoc($run2)){
    ?>
    
    <fieldset>
        <legend>Uploaded by: <?php echo $rows['userName']?></legend>
    <a href="download.php?file=<?php echo $rows['fileName'] ?>">Download <?php echo $rows['fileName']."<br>"; ?></a>
    </fieldset>
    <?php
    }
    ?>

    <a  style="text-decoration:none;" href="qna.php">QnA section</a>
</body>
</html>
