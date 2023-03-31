<?php
    if(isset($_POST['btn'])){
        $a=$_POST['a'];
        $b=$_POST['b'];
        BCNN($a,$b);
    }

    function BCNN($a,$b){
        if($a%$b == 0){
            echo $a;
        }else if($b%$a == 0){
            echo $b;
        }else{
            if($a>$b)
            {
                $step = $a;
            }
            if($a<$b)
            {
                $step = $b;
            }
            for($i=$step;$i<=$a*$b;$i++){
                if($i % $a == 0 && $i % $b == 0){
                    echo "BCNN cua hai so la: {$i}";
                    break;
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="BCNN.php" method="post">
        <label for="">Nhap so a:</label>
        <input type="text" name="a"><br>
        <label for="">Nhap so b:</label>
        <input type="text" name="b"><br>
        <input type="Submit" name="btn" value="Tim">
    </form>
</body>
</html>