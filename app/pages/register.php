<?php

$page_name = "ลงทะเบียน";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require HEADER; ?>
</head>
<body>
    <?php require NAVSIDE; ?>
    
    <div id="main_space">
        <?php require LOGO; ?>
        <div style="height: 2rem;"></div>
        <div class="form_space">
            <div class="form">
                <form action="/?route=/features/insert/users" method="POST">
                    <header>
                        <h1>ลงทะเบียนเป็นผู้ใช้</h1>
                    </header>
                    <main>
                        <p>
                            <strong>ข้อกำหนดการลงทะเบียน :</strong>
                            การกรอกเลขประจำตัวนักเรียนและกำหนดชื่อผู้ใช้ทั้งสองอย่างนี้ไม่สามารถซ้ำกับข้อมูลในระบบได้ หากใช้เลขประจำตัวนักเรียนของตัวเองไม่ได้คลิ๊ก
                            <a href="/?route=/pages/recovery">ฝ่ายช่วยเหลือ</a>
                        </p>

                        <div style="height: 20px;"></div>
                        <hr>
                        <div style="height: 20px;"></div>

                        <h2>กรอกข้อมูลส่วนตัว</h2>

                        <div class="doubleInput">
                            <div class="smallInput">
                                <h3>ระดับชั้น</h3>
                                <select name="grade" required>
                                    <option value="" disabled <?= !isset($_SESSION['register_form']['grade']) ? 'selected' : '' ?>>--เลือกระดับชั้น--</option>
                                    <?php for ($i = 1; $i <= 6; $i++) {
                                        $a = $_SESSION['register_form']['grade'] == $i ? 'selected' : '';
                                        echo "<option value='$i' $a>มัธยมศึกษาปีที่ $i</option>";
                                    } ?>
                                </select>
                            </div>
                            <div></div>
                            <div class="smallInput">
                                <h3>ห้อง</h3>
                                <select name="class" required>
                                    <option value="" disabled <?= !isset($_SESSION['register_form']['class']) ? 'selected' : '' ?>>--เลือกห้อง--</option>
                                    <?php for ($i = 1; $i <= 14; $i++) {
                                        $a = $_SESSION['register_form']['class'] == $i ? 'selected' : '';
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
                                    <option value="" disabled <?= !isset($_SESSION['register_form']['gender']) ? 'selected' : '' ?>>--เลือกเพศ--</option>
                                    <?php if (isset($_SESSION['register_form']['gender'])): ?>
                                        <option value="0" <?= $_SESSION['register_form']['gender'] == "0" ? 'selected' : '' ?>>ชาย</option>
                                        <option value="1" <?= $_SESSION['register_form']['gender'] == "1" ? 'selected' : '' ?>>หญิง</option>
                                    <?php else: ?>
                                        <option value="0">ชาย</option>
                                        <option value="1">หญิง</option>
                                    <?php endif ?>
                                </select>
                            </div>
                            <div></div>
                            <div class="smallInput">
                                <h3>คำนำหน้า</h3>
                                <select name="prefix" required>
                                    <option value="" disabled <?= !isset($_SESSION['register_form']['prefix']) ? 'selected' : '' ?>>--เลือกคำนำหน้า--</option>
                                    <?php if (isset($_SESSION['register_form']['prefix'])): ?>
                                        <option value="เด็กชาย" <?= $_SESSION['register_form']['prefix'] == "เด็กชาย" ? 'selected' : '' ?>>เด็กชาย</option>
                                        <option value="เด็กหญิง" <?= $_SESSION['register_form']['prefix'] == "เด็กหญิง" ? 'selected' : '' ?>>เด็กหญิง</option>
                                        <option value="นาย" <?= $_SESSION['register_form']['prefix'] == "นาย" ? 'selected' : '' ?>>นาย</option>
                                        <option value="นางสาว" <?= $_SESSION['register_form']['prefix'] == "นางสาว" ? 'selected' : '' ?>>นางสาว</option>
                                        <?php else: ?>
                                            <option value="เด็กชาย">เด็กชาย</option>
                                            <option value="เด็กหญิง">เด็กหญิง</option>
                                            <option value="นาย">นาย</option>
                                            <option value="นางสาว">นางสาว</option>
                                    <?php endif ?>
                                </select>
                            </div>
                        </div>

                        <div style="height: 20px;"></div>
                        <h3>ชื่อจริง</h3>
                        <input required name="firstname" type="text" placeholder="กรอกชื่อจริง" maxlength="30" value="<?= isset($_SESSION['register_form']) ? $_SESSION['register_form']['firstname'] : '' ?>">
                        
                        <div style="height: 20px;"></div>
                        <h3>นามสกุล</h3>
                        <input required name="surname" type="text" placeholder="กรอกนามสกุล" maxlength="30" value="<?= isset($_SESSION['register_form']) ? $_SESSION['register_form']['surname'] : '' ?>">
                        
                        <div style="height: 20px;"></div>
                        <h3>เลขประจำตัวนักเรียน</h3>
                        <input required name="student_id" type="text" placeholder="กรอกเลขประจำตัว 5 หลัก" minlength="5" maxlength="5" value="<?= isset($_SESSION['register_form']) ? $_SESSION['register_form']['student_id'] : '' ?>">
                        
                        <div style="height: 20px;"></div>
                        <hr>
                        <div style="height: 20px;"></div>

                        <h2>กำหนดข้อมูลผู้ใช้</h2>
                        
                        <h3>ชื่อผู้ใช้</h3>
                        <input required name="username" type="text" placeholder="กำหนดชื่อผู้ใช้" maxlength="64" value="<?= isset($_SESSION['register_form']) ? $_SESSION['register_form']['username'] : '' ?>">
                        
                        <div style="height: 20px;"></div>
                        <h3>รหัสผ่าน <button onclick="togglePassword()" type="button" id="togglePasswordButton">แสดงรหัสผ่าน</button></h3>
                        <input required name="password" type="password" id="password" placeholder="กำหนดรหัสผ่าน" maxlength="128" value="<?= isset($_SESSION['register_form']) ? $_SESSION['register_form']['password'] : '' ?>">
                    </main>
                    <footer>
                        <a href="/?route/pages/recovery">พบปัญหา</a>
                        <button type="submit" id="submit_button">ลงทะเบียน</button>
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