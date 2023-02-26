<?php


session_start();
$uName= $_SESSION['accName'];
include 'dbcon.php';
date_default_timezone_set('Asia/Kathmandu');

function setcomment($con){
    if(isset($_POST['cSubmit'])){
        
        
        $qnaInput=$_POST['qnaInput'];
        $userName=$_POST['userName'];
        $datetime=$_POST['datetime'];

        $query="INSERT INTO qna(userName,date,message) VALUES('$userName','$datetime','$qnaInput') ";
        $pass=mysqli_query($con,$query);
    }
}

function getComment($con){
    $query="SELECT * FROM qna";
    $pass=mysqli_query($con,$query);
    
    
    while($rows=mysqli_fetch_assoc($pass)){
        echo"<div id='msg-box'>";
        echo "<div id='userName' class='msgElement'>" .$rows['userName']. "<br></div>";
        echo "<div id='date' class='msgElement'>" .$rows['date']. "<br><hr></div>";
        echo "<div id='message' class='msgElement'>" .nl2br($rows['message']). "</div>";
        echo "<br><a id='reply' class='msgElement' href='reply.php'>reply</a>";
        echo "</div> <br>";
    }
}
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

<h3>This is QnA section</h3>
<?php

echo '<form method="post" name="qna" action="'.setcomment($con).'">

<textarea name="qnaInput"></textarea>
<input type="hidden" name="userName" value="'.$uName.'">
<input type="hidden" name="datetime" value="'.date('Y-m-d     H:i:s').'"><br>
<input style="cursor:pointer;" name="cSubmit" type="submit"></input> <br><br><br> <br><br><br>

</form>';

getComment($con);
?>

 
</body>
</html>




<style>

body{
    background-color:#ddd;
}
#msg-box{
    border: 2px solid #ddd  ;
    border-radius: 10px;
    background-color:white;
}

#userName{
  font-size:20px;
  font-weight:bold;
}

#date{
    font-style:italic;
    font-size:10px;
}

#reply{
    text-decoration:none;
    font-size:14px;
}

#message{
    font-size:17px;
}

.msgElement{
    margin-left:10px;
}
</style>