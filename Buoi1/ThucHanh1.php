<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        u{
            color:blue
        }
        p{
            color:red
        }
    </style>
</head>
<body>
    <?php
    $a=100;
        for($i=1;$i<=$a;$i++){
            if($i % 3 ==0 && $i % 5 == 0){
                echo "<p>Chao ban $i</p>";
            }else if($i % 3 == 0){
                echo "<p><u>Chao ong $i</u></p>";
            }else if($i % 5 == 0){
                echo "Chao ba $i";
            }
        }

    ?>
</body>
</html>