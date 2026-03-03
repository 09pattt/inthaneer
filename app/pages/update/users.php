<?php

$page_name = "แก้ไขข้อมูล";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require HEADER; ?>
    <style>
        #username_input {
            pointer-events: none;
            color: #888;
        }
    </style>
</head>
<body>
    <?php require NAVSIDE; ?>
    
    <div id="main_space">
        <?php require LOGO; ?>
        <div style="height: 2rem;"></div>
        <div class="form_space">
            <div class="form">
                <form action="/?route=/features/update/users" method="POST">
                    <header>
                        <h1>แก้ไขข้อมูลผู้ใช้</h1>
                    </header>
                    <main>
                        <p>
                            <strong>ข้อกำหนดการแก้ไขข้อมูล :</strong>
                            การแก้ไขข้อมูลนั้นสามารถแก้ไขได้ตามเงื่อนไข ยกเว้นเพียงชื่อผู้ใช้ที่ไม่อนุญาตให้แก้ไขได้อีก หากต้องการแก้ไขแนะนำให้ลบข้อมูลแล้วลงทะเบียนใหม่แทน
                        </p>

                        <div style="height: 20px;"></div>
                        <hr>
                        <div style="height: 20px;"></div>

                        <h2>เลือกแก้ไขข้อมูลส่วนตัว</h2>

                        <div class="doubleInput">
                            <div class="smallInput">
                                <h3>ระดับชั้น</h3>
                                <select name="grade" required>
                                    <option value="" disabled <?= !$userInfo['grade'] ? 'selected' : '' ?>>--เลือกระดับชั้น--</option>
                                    <?php for ($i = 1; $i <= 6; $i++) {
                                        $a = $userInfo['grade'] == $i ? 'selected' : '';
                                        echo "<option value='$i' $a>มัธยมศึกษาปีที่ $i</option>";
                                    } ?>
                                </select>
                            </div>
                            <div></div>
                            <div class="smallInput">
                                <h3>ห้อง</h3>
                                <select name="class" required>
                                    <option value="" disabled <?= !$userInfo['class'] ? 'selected' : '' ?>>--เลือกห้อง--</option>
                                    <?php for ($i = 1; $i <= 14; $i++) {
                                        $a = $userInfo['class'] == $i ? 'selected' : '';
                                        echo "<option value='$i' $a>ห้อง $i</option>";
                                    } ?>
                                </select>
                            </div>
                        </div>

                        <div style="height: 20px;"></div>
                        <div class="doubleInput">
                            <div class="smallInput">
                                <h3>เพศ</h3>
                                <select name="gender" required>
                                    <option value="" disabled <?= !$userInfo['gender'] ? 'selected' : '' ?>>--เลือกเพศ--</option>
                                    <option value="0" <?= $userInfo['gender'] == 0 ? 'selected' : '' ?>>ชาย</option>
                                    <option value="1" <?= $userInfo['gender'] == 1 ? 'selected' : '' ?>>หญิง</option>
                                </select>
                            </div>
                            <div></div>
                            <div class="smallInput">
                                <h3>คำนำหน้า</h3>
                                <select name="prefix" required>
                                    <option value="" disabled <?= !$userInfo['prefix'] ? 'selected' : '' ?>>--เลือกคำนำหน้า--</option>
                                    <?php if ($userInfo['prefix']): ?>
                                        <option value="เด็กชาย" <?= $userInfo['prefix'] == "เด็กชาย" ? 'selected' : '' ?>>เด็กชาย</option>
                                        <option value="เด็กหญิง" <?= $userInfo['prefix'] == "เด็กหญิง" ? 'selected' : '' ?>>เด็กหญิง</option>
                                        <option value="นาย" <?= $userInfo['prefix'] == "นาย" ? 'selected' : '' ?>>นาย</option>
                                        <option value="นางสาว" <?= $userInfo['prefix'] == "นางสาว" ? 'selected' : '' ?>>นางสาว</option>
                                    <?php endif ?>
                                </select>
                            </div>
                        </div>

                        <div style="height: 20px;"></div>
                        <h3>ชื่อจริง</h3>
                        <input required name="firstname" type="text" placeholder="กรอกชื่อจริง" maxlength="30" value="<?= $userInfo['firstname'] ?>">
                        
                        <div style="height: 20px;"></div>
                        <h3>นามสกุล</h3>
                        <input required name="surname" type="text" placeholder="กรอกนามสกุล" maxlength="30" value="<?= $userInfo['surname'] ?>">
                        
                        <div style="height: 20px;"></div>
                        <h3>เลขประจำตัวนักเรียน</h3>
                        <input required name="student_id" type="text" placeholder="กรอกเลขประจำตัว 5 หลัก" minlength="5" maxlength="5" value="<?= $userInfo['student_id'] ?>">
                        
                        <div style="height: 20px;"></div>
                        <hr>
                        <div style="height: 20px;"></div>

                        <h2>เลือกแก้ไขข้อมูลผู้ใช้</h2>
                        
                        <h3>ชื่อผู้ใช้</h3>
                        <input required readonly id="username_input" name="username" type="text" placeholder="กำหนดชื่อผู้ใช้" maxlength="64" value="<?= $userInfo['username'] ?>">
                        
                        <div style="height: 20px;"></div>
                        <h3>รหัสผ่าน <button onclick="togglePassword()" type="button" id="togglePasswordButton">แสดงรหัสผ่าน</button></h3>
                        <input required name="password" type="password" id="password" placeholder="กำหนดรหัสผ่าน" maxlength="128" value="<?= $userInfo['password'] ?>">
                    </main>
                    <footer>
                        <a href="/?route/pages/recovery">พบปัญหา</a>
                        <div style="display: flex; justify-content: end;">
                            <a href="/?route=/features/delete/users" class="red_button">ลบข้อมูล</a>
                            <div style="width: 1rem;"></div>
                            <button type="submit" id="submit_button">เสร็จสิ้น</button>
                        </div>
                    </footer>
                </form>
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
          const input = document.getElementById("password");
          const button = document.getElementById('togglePasswordButton');
          let status = input.type === "password";
          input.type = status ? "text" : "password";
          button.textContent = status ? "ซ่อนรหัสผ่าน" : "แสดงรหัสผ่าน";
        }
    </script>
</body>
</html>