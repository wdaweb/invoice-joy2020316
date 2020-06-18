<?php include_once "./com/base.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>發票列表</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
    table{
    text-align: center;
    letter-spacing: 1px;
    border-radius: 10px;
    box-shadow: 5px 5px 5px #ccc;
    border-collapse: collapse;
    border: 1px solid #999;
    }
</style>
</head>

<body >
    <?php include "./include/header.php";
    $period = ceil(date("n") / 2);

    if (isset($_GET['period'])) {
        $period = $_GET['period'];
    }

    ?>

    <h1>發票列表</h1>
    <br>
    <ul class="nav">
        <li><a href="list.php?period=1" style="background:<?= ($period == 1) ? 'lightgreen' : 'white'; ?>">1(1,2)</a></li>
        <li><a href="list.php?period=2" style="background:<?= ($period == 2) ? 'lightgreen' : 'white'; ?>">2(3,4)</a></li>
        <li><a href="list.php?period=3" style="background:<?= ($period == 3) ? 'lightgreen' : 'white'; ?>">3(5,6)</a></li>
        <li><a href="list.php?period=4" style="background:<?= ($period == 4) ? 'lightgreen' : 'white'; ?>">4(7,8)</a></li>
        <li><a href="list.php?period=5" style="background:<?= ($period == 5) ? 'lightgreen' : 'white'; ?>">5(9,10)</a></li>
        <li><a href="list.php?period=6" style="background:<?= ($period == 6) ? 'lightgreen' : 'white'; ?>">6(11,12)</a></li>
    </ul>
    <br>
    <br>

    <?php

    $rows = all('invoice', ['period' => $period]);

    ?>
    <table  class="w-75 table table-striped" >
        <thead class="table-success">
            <tr>
                <th scope="col">編號</th>
                <th scope="col">字軌</th>
                <th scope="col">號碼</th>
                <th scope="col">支出</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['code']; ?></td>
                    <td><?= $row['number']; ?></td>
                    <td><?= $row['expend']; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

</body>

</html>