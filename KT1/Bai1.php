<?php
    if(isset($_POST['btn'])){
        $dn = $_POST['tdn'];
        $mk = $_POST['mkhau'];
        $error=[];
        $succes=[];
        if($dn == "" && $mk == ""){
            $error['error']="Khong duoc de trong";
        }
        if($dn != "" && $mk == ""){
            $error['error1']="Khong duoc de trong";
        }
         if($dn == "" && $mk != ""){
            $error['error2']="Khong duoc de trong";
        }
        if($dn != "" && $mk != ""){
            $regex = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*\W)[A-Za-z\d\W]{8}$/';
            if(preg_match($regex,$mk)){
                $succes['alert']="Du lieu hop le";
            }else{
                $succes['alert1']="Du lieu khong hop le";
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
    <form action="Bai1.php" method="post">
        <label for="">Tên đăng nhập:</label>
        <input type="text" name="tdn" value="<?php if(isset($dn)) echo $dn ?>"><br>
        <?php if(isset($error['error'])) :?>
            <span style="color: red;"><?php echo $error['error']?></span><br>
        <?php endif; ?>
        <?php if(isset($error['error2'])) :?>
            <span style="color: red;"><?php echo $error['error2']?></span><br>
        <?php endif; ?>
        <label for="">Mật khẩu:</label>
        <input type="password" name="mkhau" value="<?php if(isset($dn)) echo $mk ?>"><br>
        <?php if(isset($error['error'])) :?>
            <span style="color: red;"><?php echo $error['error']?></span><br>
        <?php endif; ?>
        <?php if(isset($error['error1'])) :?>
            <span style="color: red;"><?php echo $error['error1']?></span><br>
        <?php endif; ?>
        <?php if(isset($succes['alert'])) :?>
            <script>
                alert('<?=$succes['alert']?>')
            </script>
        <?php endif; ?>
        <?php if(isset($succes['alert1'])) :?>
            <script>
                alert('<?=$succes['alert1'] ?>')
            </script>
        <?php endif; ?>
        <input type="submit" name="btn" value="Đăng nhập">
        <input type="reset" name="reset" value="Hủy bỏ">
    </form>
</body>
</html>