<?php

$page_name = "เข้าสู่ระบบ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require APP_DIR . '/app/components/header.php'; ?>
    <style>
        #header_title {
            font-weight: 700;
            text-align: center;
            background-color: #602560;
            color: #ffffff;
        }

        #header_subtitle {
            color: #202040;
            text-align: center;
        }

        #header_logo_cover {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem 0 1rem 0;
        }

        .header_logo {
            transition: all 500ms ease;
        }

        .header_logo:hover {
            transform: translate(-5px, -5px);
            transition: all 200ms ease;
            filter: drop-shadow(10px 10px 5px #00000080);
        }

        #header_logo1 {
            height: 120px;
        }

        .form_space {
            width: 100%;
            height: fit-content;
            display: flex;
            justify-content: center;
        }

        .form {
            width: 688px;
            background-color: #f2f2f2;
            border-radius: 1rem;
            overflow: hidden;
            display: grid;
            grid-template-rows: repeat(3, auto);
        }

        .form header {
            background-color: #602560;
            color: #FAFAFA;
            padding: 0.5rem 0.5rem 0.5rem 1rem;
        }

        .form main {
            padding: 1rem;
        }

        .form footer {
            background-color: #602560;
            color: #FAFAFA;
            padding: 0.5rem 0.5rem 0.5rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form input {
            width: 100%;
            padding: 0.5rem;
            border-radius: 0.5rem;
            border: none;
            background-color: #fafafa;
        }

        #submit_button {
            text-decoration: none;
            font-weight: bold;
            padding: 5px 2rem;
            border-radius: 0.5rem;
            font-family: "Chula";
            border: none;
            color: #202040;
            background-color: #FFAA00;
            transition: all 500ms ease;
        }

        #submit_button:hover {
            filter: drop-shadow(0 0 10px #FFAA00);
            transition: all 200ms ease;
        }
    </style>
</head>
<body>
    <?php require APP_DIR . '/app/components/navside.php'; ?>

    <div id="main_space">
        <div id="header_logo_cover">
            <img src="/assets/images/logo/inthanin.png" alt="Inthanin Logo" id="header_logo1" class="header_logo">
        </div>
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
                        <h3>ชื่อผู้ใช้</h3>
                        <input required name="username" type="text" placeholder="ชื่อผู้ใช้ที่ลงทะเบียนไว้กับคณะสีอินทนิล" value="<?= isset($_SESSION['signin_form']) ? $_SESSION['signin_form']['username'] : '' ?>">
                        <div style="height: 20px;"></div>
                        <h3>รหัสผ่าน</h3>
                        <input required name="password" type="password" placeholder="รหัสผ่านที่กำหนดไว้หรือคณะสีกำหนดให้" value="<?= isset($_SESSION['signin_form']) ? $_SESSION['signin_form']['password'] : '' ?>">
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
</body>
</html>