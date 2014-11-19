<!DOCTYPE html>
<html>
<head>
    <title>CalculateInterest</title>
    <meta charset="UTF-8">
</head>
<body>
<div id="wrapper">
    <form method="get">
        <div><label>Enter Amount</label>
        <input type="text" name="amount"></div>
        <div><input type="radio" name="currency" value="$"><label>USD</label>
        <input type="radio" name="currency" value="&#8364"><label>EUR</label>
        <input type="radio" name="currency" value="Лв."><label>BGN</label></div>
        <div><label>Compound Interest Amount</label>
        <input type="text" name="interest"></div>
        <div><select name="period">
            <option value="6" name="option">6 mount</option>
            <option value="12" name="option">1 year</option>
            <option value="24" name="option">2 year</option>
            <option value="60" name="option">5 year</option>
        </select>
        <input type="submit" value="Calculate" name="submit">
              <span>
        <?php
        if(isset($_GET["amount"])&&isset($_GET["currency"])&&isset($_GET["interest"])&&isset($_GET["period"])){
            $amount = $_GET['amount'];
            $currency =  $_GET['currency'];
            $interest =  $_GET['interest'];
            $time = $_GET['period'];
            for ($i=0 ;$i<$time; $i++) {
                $amount += $amount * (($interest/12)/100);
            }
            echo "$currency ".round($amount,2);
        }
        ?>
    </span>
        </div>

    </form>
</div>
</body>
</html>