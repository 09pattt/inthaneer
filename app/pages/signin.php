<?php

$page_name = "เข้าสู่ระบบ";

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
        <h1 id="header_title">เข้าสู่ระบบ</h1>
        <div style="height: 2rem;"></div>
        <div class="form_space">
            <div class="form">
                <form action="/?route=/features/search/users" method="POST">
                    <header>
                        <h1>ระบบยืนยันตัวตน</h1>
                    </header>
                    <main>
                        <p>
                        <strong>* หมายเหตุ :</strong>
                        เฉพาะสมาชิกคณะสีอินทนิลหรือผู้ที่ลงทะเบียนไว้เท่านั้น ที่สามารถยืนยันตัวตนเข้าสู่ระบบได้ หากเข้าสู่ระบบไม่ได้ติดต่อฝ่ายช่วยเหลือหรือคลิ๊ก
                        <a href="/?route=/pages/recovery">ฝ่ายช่วยเหลือ</a>
                        </p>

                        <div style="height: 20px;"></div>
                        <hr>
                        <div style="height: 20px;"></div>

                        <h3>ชื่อผู้ใช้</h3>
                        <input required name="username" type="text" placeholder="ชื่อผู้ใช้ที่ลงทะเบียนไว้กับคณะสีอินทนิล" value="<?= isset($_SESSION['signin_form']) ? $_SESSION['signin_form']['username'] : '' ?>">
                        <div style="height: 20px;"></div>
                        <h3>รหัสผ่าน <button onclick="togglePassword()" type="button" id="togglePasswordButton">แสดงรหัสผ่าน</button></h3>
                        <input required name="password" type="password" id="password" placeholder="รหัสผ่านที่กำหนดไว้หรือคณะสีกำหนดให้" value="<?= isset($_SESSION['signin_form']) ? $_SESSION['signin_form']['password'] : '' ?>">
                        <div style="height: 20px;"></div>
                        <a href="/?route=/pages/recovery">พี่ครับ! ผมลืมรหัสผ่าน</a>
                    </main>
                    <footer>
                        <a href="/?route=/pages/register">พี่ครับๆ ลงทะเบียนๆ</a>
                        <button type="submit" id="submit_button">ยืนยัน</button>
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