<!DOCTYPE html>
<html>
<head>
    <title>AnnualExpenses</title>
    <style>
        table, td , th{
            border: 1px solid black;
        }
    </style>
</head>
<body>
<form method="get">
Enter number ot years
    <input type="text" name="input">
    <input type="submit" value="Show Costs">
</form>
<?php
if(isset($_GET['input'])){
    $counter=$_GET['input'];
    $year = date("Y");
    $total=0;?>
    <table>
        <tr>
            <th>Year</th>
            <th>January</th>
            <th>February</th>
            <th>March</th>
            <th>April</th>
            <th>May</th>
            <th>June</th>
            <th>July</th>
            <th>August</th>
            <th>September</th>
            <th>October</th>
            <th>November</th>
            <th>December</th>
            <th>Total:</th>
        </tr>
        <?php
        for ($i=0 ;$i < $counter; $i++) {
            $nums=[rand(0,999),rand(0,999),rand(0,999),rand(0,999),rand(0,999),rand(0,999),rand(0,999),rand(0,999),rand(0,999),rand(0,999),rand(0,999),rand(0,999)];
            ?>
            <tr>
                <td><?= $year?></td>
                <?php
                $year--;
                for ($y=0 ;$y<12; $y++) {?>
                    <td><?=$nums[$y]?></td>
               <?php
                }
                ?>
                <td>
                    <?= array_sum($nums)?>
                </td>
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