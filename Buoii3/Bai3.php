<?php
    if(isset($_POST['btn'])){
        $a=$_POST['so'];
        $b=$_POST['hienthi'];
        if($a == ""){
            echo "Ban chua nhap so";
        }else{
           for($i=2;$i<=$a;$i++){
                if(kiemtra($i)==true){
                    $b = $i;
                    echo $b;
                }
                
           }
        }
    }

    function kiemtra($a){
        $dem =0;
        for($i=2;$i<=$a-1;$i++){
            if($a%$i==0){
                $dem++;
            }
        }
        if($dem==0){
            return true;
        }else{
            return false;
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
    <form action="Bai3.php" method="post">
        Nhập số: <input type="text" name="so"><br>
        Số nguyên tố: <input type="text" name="hienthi" value="
        <?php 
            for($i=2;$i<=$a;$i++){
                if(kiemtra($i)==true){
                    $b = $i;
                    echo $b." ";
                }
                
           }
        ?>
        "><br>
        <input type="submit" name="btn" value="tim">
        <input type="submit" name="btn1" value="boqua">
    </form>
</body>
</html>