<?php include "./include/header.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>規劃開獎</title>

</head>

<body>


    <?php
    include "./com/base.php";


    $data = [
        'period' => $_POST['period'],
        'year' => $_POST['year'],
        'code' => $_POST['code'],
        'number' => $_POST['number'],
        'expend' => $_POST['expend']
    ];

    $res = save("invoice", $data);
    
    if ($res == 1) {
        echo "新增成功<br>";

        echo "<a href='index.php'>繼續輸入</a><br>";

        echo  "<a href='list.php'>發票列表</a>";
    } else {

        echo  "新增失敗";
    }


    ?>

</body>

</html>