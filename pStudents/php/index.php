    <?php
        include 'login.php';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gYan Pokha</title>
    <style>
        .err{
            padding: 10px;
            text-align: center;
            background-color: red;
            opacity: 0.5;
            
        }
    </style>
</head>
<body>
    <script>
        
    </script>
    <div id="lin">
    <form method="post"  name="signIn">

        <label for="uName">User Name :</label>
        <input type="text" name="uName" class="lInput" id="uName"><br>
        
        <label for="passW">PassWord :</label>
        <input type="password" name="passW" class="lInput" id="passW"><br>
        
        <button  type="submit" class="lInput" id="signupbutton">Login In</button>


    </form>
    </div>
    

    
    
        
       <a class="inputinfo" id="registerbutton" href="register.php" style="text-decoration:none;">Sign Up</a>
       


       <style>
#lInput{
    align-item:center;
}

#lin{
    display-flex:center;
    background-color:#dddd;
}
</style>
</body>
</html>


