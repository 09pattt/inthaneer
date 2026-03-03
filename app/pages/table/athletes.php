<?php

$page_name = "รายชื่อนักกีฬา";

$athleteStmt = $pdo->query("SELECT u.student_id, u.prefix, u.firstname, u.surname, u.gender, u.grade, u.class FROM athletes a JOIN users u ON a.student_id = u.student_id");

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
            color: #FFFFFF;
            background-color: #982598;
        }
    </style>
</head>
<body>
    <?php require APP_DIR . '/app/components/navside.php'; ?>

    <div id="main_space">
        <h1>รายชื่อนักกีฬาคณะสีอินทนิล ปีพ.ศ.2569</h1>

        <table id="main_table">
            <tr>
                <th style="width: 50px;">ลำดับ</th>
                <th style="width: 150px;">เลขประจำตัวนักเรียน</th>
                <th style="width: 100px;">คำนำหน้า</th>
                <th style="width: 250px;">ชื่อ</th>
                <th style="width: 250px;">นามสกุล</th>
                <th style="width: 50px;">เพศ</th>
                <th style="width: 50px;">ชั้น</th>
                <th style="width: 50px;">ห้อง</th>
            </tr>
            <?php while ($row = $athleteStmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr class="apply_rows_pattern">
                    <td><?= $interval ?></td>
                    <td><?= $row['student_id'] ?></td>
                    <td><?= $row['prefix'] ?></td>
                    <td><?= $row['firstname'] ?></td>
                    <td><?= $row['surname'] ?></td>
                    <td><?= ($row['gender'] == 0) ? 'ชาย' : 'หญิง' ?></td>
                    <td><?= $row['grade'] ?></td>
                    <td><?= $row['class'] ?></td>
                </tr>
                <?php $interval++; ?>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>