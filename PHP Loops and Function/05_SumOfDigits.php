<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Sum of Digits</title>
    <style>
        table, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form method="post">
  Input string
    <input type="text" name="numbers"/>
    <input type="submit"/>
</form>
<?php
if (isset($_POST["numbers"]) && !empty($_POST["numbers"])) {
    $numbers = explode(", ",$_POST['numbers']);
    echo "<table>";
    foreach ($numbers as $number) {
        echo "<tr><td>$number</td><td>";
        if (ctype_digit($number)) {
            echo array_sum(str_split($number));
        } else {
            echo "I cannot sum that";
        }
        echo "</td></tr>";
    }
    echo "</table>";
}
?>
</body>
</html>