<?php

$page = "รายการที่รับสมัคร";

require APP_DIR . '/app/features/connect.php';

$sportsStmt = $pdo->query("SELECT * FROM sports");

$interval = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require APP_DIR . '/app/components/header.php'; ?>
    <style>
        body {
            background-color: #FFF2D0;
        }
        th {
            color: #ffffff;
            background-color: #008BFF;
        }
    </style>
</head>
<body>
    <?php require APP_DIR . '/app/components/navside.php'; ?>

    <div id="main_space">
        <h1>รายการกีฬาที่เปิดรับสมัคร</h1>

        <table id="main_table">
            <tr>
                <th style="width: 50px;">ลำดับ</th>
                <th style="width: 100px;">รหัสรายการ</th>
                <th style="width: 200px;">ชื่อรายการ</th>
                <th style="width: 100px;">ประเภท</th>
                <th style="width: 250px;">ระดับชั้น</th>
            </tr>
            <?php while ($row = $sportsStmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr class="apply_rows_pattern">
                    <td><?= $interval ?></td>
                    <td><?= $row['sport_id'] ?></td>
                    <td><?= $row['sport_name'] ?></td>
                    <td><?= ($row['gender'] == 0) ? 'ชาย' : 'หญิง' ?></td>
                    <td><?= ($row['grade'] == 0) ? 'ระดับชั้นมัธยมศึกษาตอนต้น' : 'ระดับชั้นมัธยมศึกษาตอนปลาย' ?></td>
                </tr>
                <?php
                    $interval++;
                ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>