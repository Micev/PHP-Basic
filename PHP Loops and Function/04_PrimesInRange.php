<!DOCTYPE html>
<html>
<head>
    <title>PrimesInRange</title>
</head>
<body>
    <form method="get">
        Start Index:
        <input type="text" name="startNum">
        End:
        <input type="text" name="endNum">
        <input type="submit">
    </form>
    <?php
    if(isset($_GET['startNum'])&&isset($_GET['endNum'])){
        $startNumber = $_GET['startNum'];
        $endNumber = $_GET['endNum'];
        $isPrime=true;
        for ($i=$startNumber ;$i<=$endNumber; $i++) {
            for ($y=2 ;$y<=floor(sqrt($i)); $y++) {
                if($i%$y==0){
                    $isPrime=false;
                }
            }
            if($isPrime){
                echo "<b>$i</b>, ";
            }
            else{
                echo "$i, ";
            }
            $isPrime=true;
        }
    }
    ?>
</body>
</html>