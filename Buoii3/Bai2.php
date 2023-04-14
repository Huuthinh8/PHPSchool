<?php
    $inforName = [
        "inforOne" => [
            "id"=>1,
            "fullname"=>"Nguyen Huu Thinh",
            "address"=>"Ha Noi",
            "gender"=>"Nam",
            "year"=>2002
        ],
        "inforTwo" => [
            "id"=>2,
            "fullname"=>"Nguyen Thanh Nhan",
            "address"=>"Ha Noi",
            "gender"=>"Nu",
            "year"=>2001
        ]
    ];
    echo "<pre>";
    print_r($inforName);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
        border: 1px solid black;
        width: 100%;
    }
    th{
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
        text-align: center;
    }
</style>
<body>
   <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Ho va Ten</th>
                <th>Que quan</th>
                <th>Gioi tinh</th>
                <th>Nam sinh</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($inforName as $item) :?>;

                <tr>
                    <td><?php echo $item['id']?></td>
                    <td><?php echo $item['fullname']?></td>
                    <td><?php echo $item['address']?></td>
                    <td><?php echo $item['gender']?></td>
                    <td><?php echo $item['year']?></td>
                 </tr>

            <?php endforeach ; ?>
        </tbody>
   </table>
</body>
</html>