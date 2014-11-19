<!DOCTYPE html>
<html>
<head>
    <meta lang="UTF-8">
    <title></title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="name" placeholder="Name..."><br>
    <input type="text" name="age" placeholder="Age..."><br>
    <div>
        <input type="radio" name="sex" value="male" id="male" checked>
        <label for="male">Male</label>
    </div>
    <div>
        <input type="radio" name="sex" value="female" id="female">
        <label for="female">Female</label>
    </div>
    <input type="submit" value="Send" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST["submit"])){
    echo "My name is " .$_POST["name"].". I am ".$_POST["age"]." years old. I am ".$_POST["sex"] ;
 }?>