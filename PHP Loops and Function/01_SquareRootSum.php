<!DOCTYPE html>
<html>
<head>
    <title>SquareRootSum</title>
    <style>
        table, td , th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Number</th>
        <th>Square</th>
    </tr>
<?php
for ($i=0 ;$i<=100; $i++) {
    if($i%2==0){
    ?>
    <tr>
        <td><?= $i?></td>
        <td><?= round(sqrt($i), 2)?></td>
    </tr>
<?php
    }
}
?>
</table>
</body>
</html>