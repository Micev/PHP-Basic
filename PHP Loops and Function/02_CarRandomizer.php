<!DOCTYPE html>
<html>
<head>
    <title>CarRandomizer</title>
    <style>
        table, td , th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form method="get">
    Enter cars
    <input type="text" name="input">
    <input type="submit" value="Show result">
</form>
<?php
if(isset($_GET["input"])){
    $color=["blue","orange","red","white","black"];
    $cars = explode(", ",$_GET["input"]);?>
    <table>
        <tr>
            <th>Cars</th>
            <th>Color</th>
            <th>Count</th>
        </tr>
        <?php
        foreach ($cars as $g) {
        ?>
            <tr>
                <td><?php echo $g ?></td>
                <td><?php echo $color[array_rand($color)]?></td>
                <td><?php echo rand(0,7)?></td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
}
?>
</body>
</html>