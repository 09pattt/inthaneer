<?php

$page_name = "การลงสมัคร";

$enrolledStmt = $pdo->query("SELECT * FROM enrolled");

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
            background-color: #134E8E;
        }
    </style>
</head>
<body>
    <?php require APP_DIR . '/app/components/navside.php'; ?>
    
    <div id="main_space">
        <h1>บันทึกการลงสมัคร</h1>

        <table id="main_table">
            <tr>
                <th style="width: 50px;">ลำดับ</th>
                <th style="width: 200px;">รหัสการบันทึก</th>
                <th style="width: 200px;">เลขประจำตัวนักเรียน</th>
                <th style="width: 200px;">รหัสรายการ</th>
            </tr>
            <?php while ($row = $enrolledStmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr class="apply_rows_pattern">
                    <td><?= $interval ?></td>
                    <td><?= $row['enrolled_code'] ?></td>
                    <td><?= $row['student_id'] ?></td>
                    <td><?= $row['sport_id'] ?></td>
                </tr>
                <?php
                    $interval++;
                ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>