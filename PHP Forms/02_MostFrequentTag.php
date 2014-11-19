<!DOCTYPE html>
<html>
<head>
    <title>PrintForm</title>
    <style>
        ul{
            list-style: none;
            padding: 0;
        }
    </style>
</head>
<body>
<p>Enter Tags:</p>
<form method="post">
    <input type="text" name="input">
    <input type="submit">
</form>
<?php
if(isset($_POST['input'])){
    $arr = explode(", ",$_POST['input']);
    $arr = array_count_values($arr);
    arsort($arr);
    echo "<ul>";
    foreach($arr as $key => $values){
        echo "<li>"."$key : $values times"."</li>";
    }
    echo "</ul>";
    reset($arr);
    echo "<div>"."Most Frequent Tag is : ".key($arr)."</div>";
}
?>
</body>
</html>
