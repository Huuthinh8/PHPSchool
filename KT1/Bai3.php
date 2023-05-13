<?php 
if(isset($_POST['btn'])){
    $arrayLe=[];
    $arrayChan=[];
    $arrayNumber=[];
    $arraychia5=[];
    $number=$_POST['mang'];
    $array=explode(",",$number);
    $n=count($array);
    //xuat mang
    function xuat($n,&$arrayNumber,$array){
        for($i=0;$i<$n;$i++){
            array_push($arrayNumber,$array[$i]);
        }
    }
    //so chia het cho 5

    function chiahetcho5($n,&$arraychia5,$array){
        for($i=0;$i<$n;$i++){
            if($array[$i]%5===0)
            array_push($arraychia5,$array[$i]); // thêm các phần tử vào mảng arraychia5 từ array.
        }
    }

    // số lẻ
    function sole($n,&$arrayLe,$array){
        for($i=0;$i<$n;$i++){
            if($array[$i]%2!=0)
            array_push($arrayLe,$array[$i]); // thêm các phần tử vào mảng arraychia5 từ array.
        }
        sort($arrayLe); //tang dan
    }
    // số chan
    function sochan($n,&$arrayChan,$array){
        for($i=0;$i<$n;$i++){
            if($array[$i]%2==0)
            array_push($arrayChan,$array[$i]); // thêm các phần tử vào mảng arraychia5 từ array.
        }
        rsort($arrayChan);//giam dan
    }
    // tinh trung binh lẻ
    function tble($arrayLe){
        $n = count($arrayLe);
        $sum = 0;
        if(!empty($arrayLe)){
            for($i=0;$i<$n;$i++){
                $sum +=$arrayLe[$i];
            }
            return $sum/$n;
        }else{
            return 0;
        }
    }
    // tinh trung binh chan
    function tbchan($arrayChan){
        $n = count($arrayChan);
        $sum = 0;
        if(!empty($arrayChan)){
            for($i=0;$i<$n;$i++){
                $sum +=$arrayChan[$i];
            }
            return $sum/$n;
        }else{
            return 0;
        }
    }
    xuat($n,$arrayNumber,$array);
    chiahetcho5($n,$arraychia5,$array);
    sole($n,$arrayLe,$array);
    sochan($n,$arrayChan,$array);
    $tbLe = tble($arrayLe);
    $tbChan = tbchan($arrayChan);
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
    <form action="bai3.php" method="post">
        <label for="">Nhap mang n phan tu:</label>
        <input type="text" name="mang" value="<?php if(isset($number)) echo $number?>"><br>
        <label for="">Mang vua nhap la:</label>
        <input type="text" name="hienthi" value="<?php 
            if(!empty($arrayNumber))
            {
                $xuat = implode(",",$arrayNumber); // chuyển mảng thành chuỗi ngăn cách bởi dấu ,
                echo $xuat;
            }
        ?>"><br>
        <label for="">Chia het cho 5:</label>
        <input type="text" name="hienthi1" value="<?php 
            if(!empty($arraychia5))
            {
                $chia5 = implode(",",$arraychia5);
                echo $chia5;
            }
        ?>"><br>
        <label for="">Sắp xếp tăng dần số lẻ:</label>
        <input type="text" name="hienthi2" value="<?php 
            if(!empty($arrayLe))
            {
                $sxle = implode(",",$arrayLe);
                echo $sxle;
            }
        ?>"><br>
        <label for="">Sắp xếp giảm dần số chan:</label>
        <input type="text" name="hienthi3" value="<?php 
            if(!empty($arrayChan))
            {
                $sxchan = implode(",",$arrayChan);
                echo $sxchan;
            }
        ?>"><br>
        <label for="">Trung bình lẻ:</label>
        <input type="text" name="hienthi4" value="<?php 
            if(isset($tbLe))
            {
                
                echo $tbLe;
            }
        ?>"><br>
        <label for="">Trung bình chan:</label>
        <input type="text" name="hienthi5" value="<?php 
            if(isset($tbChan))
            {
                
                echo $tbChan;
            }
        ?>"><br>
        <Button name="btn">Thực Hiện</Button>
    </form>
</body>

</html>