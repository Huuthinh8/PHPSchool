<?php
    if(isset($_POST['btn'])){
        $n = $_POST['n'];
        $error = [];
        if($n<=0){
            $error['error']="Nhap n phai lon hon khong"; 
        }else{
            $kqtinh = tinhtong($n);
        }
    }

    function giaithua($x){
        $giaithua = 1;
        for($i=1;$i<=$x;$i++){
            $giaithua=$giaithua*$i;
        }
        return $giaithua;
    }
    function tinhtong($x){
       $tong = 1;
        for($i=1;$i<=$x;$i++){
            $tong += ($i*$i)/(giaithua($i));
        }
        return $tong;
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
    <form action="Bai2.php" method="post">
        <label for="">Nhập n:</label>
        <input type="text" name="n" value="<?php if(isset($n)) echo $n; ?>"><br>
        <?php if(isset($error['error'])):?>
            <span><?php echo $error['error'] ?></span>
        <?php endif; ?>
        <label for="">Tinh tổng:</label>
        <input type="text" name="tinh" value="<?php if(isset($kqtinh)) echo $kqtinh; ?>"><br>
        <input type="submit" name="btn" value="Tinh">
    </form>
</body>
</html>