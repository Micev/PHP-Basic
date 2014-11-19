<?php
$name = "Gosho";
$tel = "0884-321-432";
$age = 24;
$address = "Hadji Dimitar";
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        #wrapper{
            margin: 0 auto;
          display: inline-block;
        }
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th{
            padding: 5px;
            text-align: left;
            border: 1px solid black;
            background-color: orange;
            border-collapse: collapse;
        }
        td{
            padding: 5px;
            border: 1px solid black;
            text-align: right;
        }
    </style>
</head>
<body>
<div id="wrapper">
    <table>
        <tbody>
        <tr>
            <th>Name</th>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <th>Phone number</th>
            <td><?php echo $tel; ?></td>
        </tr>
        <tr>
            <th>Age</th>
            <td><?php echo $age; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $address; ?></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
