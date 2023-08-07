<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="task2.css">
</head>
<center>
<body text="darkviolet" bgcolor="darksalmon">
<form action ="db.php" method= "post">
<div class="r1">
<h1 style=" text-align:center ;">STUDENT LOGIN FORM </h1>
    <p>
     <label for="user">Username :</label>
    <input type="text" style="text-align: center;" name="username" id="user" placeholder="enter the Username">
    </p>

    <p>
   <label for = "pass">Password: </label>
   <input type ="text " style="text-align: center;"  id= "pass" name = "password" placeholder="enter the password" required><br><br>
   </p>
</center>
</div>
<div class="submit">
<input  type ="submit" name ="submit">
</div>
</body>
</html>
<?php
