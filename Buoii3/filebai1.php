<?php
/*
    làm việc với file
    -để mở file ta dùng câu lệnh fopen(tenfile,option)
    option thứ 1: 
        r chỉ đọc
        r+ đọc và viết
        w nếu file chưa tồn tại nó sẽ tạo file mới
        a nếu file tồn tại thì nó sẽ viết vào file
    - để đọc file ta dùng fread
        đọc 1 dòng trên file ta dùng fgets
        kiểm tra sự kết thúc của file feof hay dùng while
        kierm tra sự tồn tại của file ta dùng file_exits(tenFile)
    - fwrite viết file.

 */
    if(isset($_POST['btn'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $desc = $_POST['desc'];

        if(file_exists('data.txt')){
            $file=fopen('data.txt','a');
        }else{
            $file = fopen('data..txt','w');
        }
        fwrite($file,$id."\t".$name."\t".$desc."\n");
        fclose($file);
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
    <form action="filebai1.php" method="post">
        <label for="">id:</label>
        <input type="text" name="id"><br>
        <label for="">Name:</label>
        <input type="text" name="name"><br>
        <label for="">Desc:</label>
        <input type="text" name="desc"><br>
        <input type="submit" name="btn" value="hienthi">
    </form>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Desc</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $fn=fopen("data.txt","r") or die("Loi khon mo duoc file");
                while(!feof(($fn))) { //neu chua het dong
                
                }
            ?>
        </tbody>
    </table>
</body>
</html>