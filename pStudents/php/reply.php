

<form action="" method="post">
    <input type="text" name="content" id="content">
    <button type="submit">Submit</button>

</form>

<?php
include 'dbcon.php';
$content = $_POST["content"];
$query  = $mysqli_query($con,"INSERT INTO `replys`(`content`) VALUES ('$content')")
?>