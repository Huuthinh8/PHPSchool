<?php
    if(isset($_POST['btn'])){
        $so = $_POST['a'];
        giaithua($so);
    }

    function giaithua($n){
        
        if($n ==0 || $n == 1){
            echo "Gia thua cua so {$n} = 1";
        }else{
            $giaithua=1;
            for($i=2;$i<=$n;$i++){
                $giaithua *= $i;
            }
            echo "Gia thua cua so {$n} = {$giaithua}";
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
    <form action="TinhGiaiThua.php" method="post">
        <label for="">Nhap so:</label>
        <input type="text" name="a"><br>
        <input type="Submit" name="btn" value="tinh">
    </form>
</body>
</html>