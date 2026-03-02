<?php

$page_name = "ลงสมัครนักกีฬา";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require HEADER; ?>
    <style>
        body {
            background-color: #C9BEFF;
        }
        input, select {
            opacity: 60%;
            pointer-events: none;
        }
    </style>
</head>
<body>
    <?php require NAVSIDE; ?>

    <div id="main_space">
        <?php require LOGO; ?>
        <h1 id="header_title">การเพิ่มข้อมูล</h1>
        <div style="height: 2rem;"></div>
        <div class="form_space">
            <div class="form">
                <form action="/?route=/features/insert/athletes" method="POST">
                    <header>
                        <h1>ลงสมัครนักกีฬา</h1>
                    </header>
                    <main>
                        <p>
                            <strong>อ่านก่อนนะ! :</strong>
                            ข้อมูลที่ใช้ในการลงสมัครนักกีฬาไม่สามารถเปลี่ยนแปลงได้ เว้นแต่จะเปลี่ยนข้อมูลของผู้ใช้ และข้อมูลนักกีฬากับข้อมูลผู้ใช้จะเป็นข้อมูลเดียวกันเสมอ
                        </p>
                        <p>
                            <strong>ที่สำคัญ!</strong>
                            ข้อมูลสามารถมีได้เพียงหนึ่งรหัสประจำตัวนักเรียนต่อหนึ่งข้อมูลผู้ใช้ต่อหนึ่งข้อมูลนักกีฬาเท่านั้น
                        </p>

                        <div style="height: 20px;"></div>
                        <hr>
                        <div style="height: 20px;"></div>

                        <h2>ตรวจสอบข้อมูลส่วนตัว</h2>

                        <div class="doubleInput">
                            <div class="smallInput">
                                <h3>ระดับชั้น</h3>
                                <select name="grade" required readonly>
                                    <option value="<?= $userInfo['grade'] ?>" selected>มัธยมศึกษาปีที่ <?= $userInfo['grade'] ?></option>
                                </select>
                            </div>
                            <div></div>
                            <div class="smallInput">
                                <h3>ห้อง</h3>
                                <select name="class" required readonly>
                                    <option value="<?= $userInfo['class'] ?>" selected>ห้อง <?= $userInfo['class'] ?></option>
                                </select>
                            </div>
                        </div>

                        <div style="height: 20px;"></div>
                        <div class="doubleInput">
                            <div class="smallInput">
                                <h3>เพศ</h3>
                                <select name="gender" required readonly>
                                    <option value="<?= $userInfo['gender'] ?>" selected><?= $userInfo['gender'] == 0 ? 'ชาย' : 'หญิง' ?></option>
                                </select>
                            </div>
                            <div></div>
                            <div class="smallInput">
                                <h3>คำนำหน้า</h3>
                                <select name="prefix" required readonly>
                                    <option value="<?= $userInfo['prefix'] ?>" selected><?= $userInfo['prefix'] ?></option>
                                </select>
                            </div>
                        </div>

                        <div style="height: 20px;"></div>
                        <h3>ชื่อจริง</h3>
                        <input required readonly name="firstname" type="text" placeholder="กรอกชื่อจริง" maxlength="30" value="<?= $userInfo['firstname'] ?>">
                        
                        <div style="height: 20px;"></div>
                        <h3>นามสกุล</h3>
                        <input required readonly name="surname" type="text" placeholder="กรอกนามสกุล" maxlength="30" value="<?= $userInfo['surname'] ?>">
                        
                        <div style="height: 20px;"></div>
                        <h3>เลขประจำตัวนักเรียน</h3>
                        <input required readonly name="student_id" type="text" placeholder="กรอกเลขประจำตัว 5 หลัก" minlength="5" maxlength="5" value="<?= $userInfo['student_id'] ?>">
                    </main>
                    <footer>
                        <a href="/?route/pages/recovery">พบปัญหา</a>
                        <button type="submit" id="submit_button">ลงสมัคร</button>
                    </footer>
                </form>
            </div>
        </div>
    </div>
</body>
</html>