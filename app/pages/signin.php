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
                        เฉพาะผู้ที่ลงทะเบียนไว้แล้วเท่านั้น ที่สามารถยืนยันตัวตนเข้าสู่ระบบได้ หากเข้าสู่ระบบไม่ได้ติดต่อฝ่ายช่วยเหลือหรือคลิ๊ก
                        <a href="/?route=/pages/recovery">ฝ่ายช่วยเหลือ</a>
                        </p>

                        <div style="height: 20px;"></div>
                        <hr>
                        <div style="height: 20px;"></div>

                        <h3>ชื่อผู้ใช้</h3>
                        <?php
                            if (isset($_SESSION['signin_form'])) {
                                $auto_username = $_SESSION['signin_form']['username'];
                            } elseif ($userInfo['username']) {
                                $auto_username = $userInfo['username'];
                            } else {
                                $auto_username = '';
                            }
                        ?>
                        <input required name="username" type="text" placeholder="ชื่อผู้ใช้ที่ลงทะเบียนไว้กับคณะสีอินทนิล" value="<?= $auto_username ?>">
                        <div style="height: 20px;"></div>

                        <?php
                            if (isset($_SESSION['signin_form'])) {
                                $auto_password = $_SESSION['signin_form']['password'];
                            } elseif ($userInfo['password']) {
                                $auto_password = $userInfo['password'];
                            } else {
                                $auto_password = '';
                            }
                        ?>
                        <h3>รหัสผ่าน <button onclick="togglePassword()" type="button" id="togglePasswordButton">แสดงรหัสผ่าน</button></h3>
                        <input required name="password" type="password" id="password" placeholder="รหัสผ่านที่กำหนดไว้หรือคณะสีกำหนดให้" value="<?= $auto_password ?>">
                    </main>
                    <footer>
                        <a href="/?route=/pages/register">ลงทะเบียน</a>
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