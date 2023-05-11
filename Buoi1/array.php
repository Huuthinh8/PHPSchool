<?php
    $a = array("1","4","2","5","8","10","3","6","7","10","9");
    sort($a);
    for($i=0;$i<=9;$i++){
        echo $a[$i]." ";
    }
    echo "5 phan tu be nhat la: ";
    for($i=0;$i<=4;$i++){
        echo $a[$i]." ";
    }
?>