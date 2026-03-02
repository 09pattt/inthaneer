<?php

$page_name = "ออกจากระบบ";

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
            color: #FAFAFA;
            background-color: #602560;
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
            color: #f2f2f2;
            background-color: #FF6464;
            transition: all 500ms ease;
        }

        #submit_button:hover {
            filter: drop-shadow(0 0 10px #FF6464);
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
        <h1 id="header_title">ออกจากระบบ</h1>
        <div style="height: 2rem;"></div>
        <div class="form_space">
            <div class="form">
                <form action="/?route=/features/signout" method="POST">
                    <header>
                        <h1>ลงชื่อออก</h1>
                    </header>
                    <main>
                        <p>
                        <strong>* หมายเหตุ :</strong>
                        การลงชื่อออก จะทำให้ระบบฝั่งผู้ใช้จะกลับไปเป็นโหมดผู้เข้าชมทั่วไป หมายความว่าระบบจะปิดการเข้าถึงหน้าเว็บบางส่วนซึ่งสงวนไว้ซึ่งสมาชิกเท่านั้น คงไว้ซึ่งนโยบายการพัฒนาซอฟต์แวร์ที่มีจุดประสงค์เพื่อความปลอดภัยของข้อมูลขององค์กรและผู้ใช้และสิทธิ์ของสมาชิกที่คณะสีรับผิดชอบดูแล อย่างไรก็ตามผู้ใช้ที่มีรายชื่อในทะเบียนสามารถเข้าสู่ระบบได้ทุกเมื่อที่ให้บริการ
                        </p>
                    </main>
                    <footer>
                        <a href="/?route=/pages/recovery">เรียนรู้เพิ่มเติบ</a>
                        <button type="submit" id="submit_button">ลงชื่อออก</button>
                    </footer>
                </form>
            </div>
        </div>
    </div>
</body>
</html>