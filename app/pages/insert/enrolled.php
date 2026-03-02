<?php

$page_name = "เข้าร่วมการแข่ง";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require APP_DIR . '/app/components/header.php'; ?>
    <style>
        body {
            background-color: #C9BEFF;
        }
    </style>
</head>
<body>
    <?php require APP_DIR . '/app/components/navside.php'; ?>

    <div id="main_space">
        <div id="header_logo_cover">
            <img src="/assets/images/logo/inthanin.png" alt="Inthanin Logo" id="header_logo1" class="header_logo">
        </div>
        <h1 id="header_title">การเพิ่มข้อมูล</h1>
        <div style="height: 2rem;"></div>
        <div class="form_space">
            <div class="form">
                <form action="/?route=/features/insert/enrolled" method="POST">
                    <header>
                        <h1>เข้าร่วมการแข่งขัน</h1>
                    </header>
                    <main>
                        <p>
                        <strong>อ่านก่อนนะ! :</strong>
                        เฉพาะรหัสประจำตัวนักเรียนที่ลงสมัครเป็นนักกีฬาแล้วเท่านั้นที่จะสามารถดำเนินการต่อได้ หากยังไม่สมัคร
                        <a href="/?route=/pages/insert/athletes">สมัครเลย</a>
                        </p>
                        
                        <div style="height: 20px;"></div>
                        <hr>
                        <div style="height: 20px;"></div>
                        
                        <h3>รหัสประจำตัวนักเรียนของนักกีฬา</h3>
                        <input required list="student_id" name="student_id" placeholder="ใส่รหัสประจำตัวนักเรียนของนักกีฬา" minlength="5" maxlength="5">

                        <div style="height: 20px;"></div>
                        <h3>รหัสรายการแข่งขัน</h3>
                        <select required name="sport_id">
                            <option value="" selected disabled>--เลือกรายการแข่งขัน--</option>
                            <?php
                                $stmt = $pdo->query("SELECT * FROM sports");
                                $stmt->execute();
                                while ($sport = $stmt->fetch()) {
                                    $gender = ($sport['gender']) == 0 ? 'ชาย' : 'หญิง';
                                    $grade = ($sport['grade']) == 0 ? 'ระดับชั้นมัธยมศึกษาตอนต้น' : 'ระดับชั้นมัธยมศึกษาตอนปลาย';
                                    echo '<option value="' . $sport['sport_id'] . '">' . $sport['sport_id'] . ' - ' . $sport['sport_name'] . ' ' . $gender . ' ' . $grade . '</option>';
                                }
                            ?>
                        </select>
                        <div style="height: 20px;"></div>
                    </main>
                    <footer>
                        <a href="/?route=/pages/recovery">ฝ่ายช่วยเหลือ</a>
                        <button type="submit" id="submit_button">ยืนยัน</button>
                    </footer>
                </form>
            </div>
        </div>
    </div>
    <?php require DATALISTS; ?>
</body>
</html>