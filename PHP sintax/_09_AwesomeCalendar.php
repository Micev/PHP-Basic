<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Problem 9. Awesome Calendar</title>
   <style>
       table {
           width: 22%;
           display: inline-table;
           border-collapse: collapse;
           margin: 1%;
       }

       table thead tr:nth-of-type(2) th {
           border-bottom: solid 1px #000;
           border-top: solid 1px #000;
       }



       table td, table thead tr th {
           width: 14.28%;
           text-align: right;
       }

       .sunday {
           color: red;
       }

       .calendar {
           width: 80%;
           margin: 25px auto;
           text-align: center;
       }

       .year {
           font-weight: bold;
           font-size: 300%;
       }
   </style>
</head>
<body>
<?php
function getMonthTable($month, $year)
{
    $monthTable = array_fill(1, 5, array_fill(1, 7, ""));
    $firstDay = mktime(0, 0, 0, $month, 1, $year);
    $day = getdate($firstDay);
    $lastDay = strtotime("last day of {$day['month']} {$year}");
    $weekNum = 1;

    $monthTable['month'] = $day['month'];

    for ($i = $firstDay; $i <= $lastDay; $i += 3600 * 24) {

        $day = getdate($i);

        if ($day['wday'] == 0) {
            $day['wday'] = 7;
        }

        $monthTable[$weekNum][$day['wday']] = $day['mday'];

        if ($day['wday'] == 7) {
            $weekNum++;
        }

    }

    $enMonths = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
    $bgMonths = array("Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Октомври", "Ноември", "Декември");
    $monthTable['month'] = str_replace($enMonths, $bgMonths, $day['month']);

    return $monthTable;
} // end getMonthTable


function printMonthTable($monthTable)
{
    echo "
    <table>
        <thead>
        <tr><th colspan='5'>{$monthTable['month']}</th></tr>
        <tr>
            <th>По</th>
            <th>Вт</th>
            <th>Ср</th>
            <th>Чт</th>
            <th>Пе</th>
            <th>Сб</th>
            <th class='sunday'>Не</th>
        </tr>
        </thead>
        <tbody>\n";

    for ($i = 1; $i <= 5; $i++) {
        echo "            <tr>\n";

        for ($j = 1; $j <= 7; $j++) {
            echo "                <td>{$monthTable[$i][$j]}</td>\n";
        }

        echo "            </tr>\n";

    }

    echo "
        </tbody>
    </table>";

} //end printMonthTable

?>



<div class="calendar">



    <div class="year">
        <?php
        $year = 2014;
        echo $year;
        ?>
    </div>
    <hr>

    <?php

    for ($month = 1; $month <= 12; $month++) {
        printMonthTable(getMonthTable($month, $year));
    }
    ?>

</div>

</body>
</html>