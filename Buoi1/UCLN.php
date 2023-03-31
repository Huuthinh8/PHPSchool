<?php
    if(isset($_POST['btn'])){
        $a=$_POST['a'];
        $b=$_POST['b'];
        UCLN($a,$b);
    }

    function UCLN($a,$b){
        if($b==0)
        echo $a;
        else 
        echo UCLN($b,$a%$b);
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
    <form action="UCLN.php" method="post">
        <label for="">Nhap so a:</label>
        <input type="text" name="a"><br>
        <label for="">Nhap so b:</label>
        <input type="text" name="b"><br>
        <input type="Submit" name="btn" value="Tim">
    </form>
</body>
</html>