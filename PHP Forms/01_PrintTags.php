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
        $split = explode(", ",$_POST['input']);
    echo "<ul>";
    for ($i=0 ;$i<count($split); $i++) {
        echo "<li>"."$i : $split[$i]"."</li>";
    }
    echo "</ul>";
    }
    ?>
</body>
</html>
