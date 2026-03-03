<?php

$page_name = "ออกจากระบบ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require APP_DIR . '/app/components/header.php'; ?>
    <style>
        #submit_button {
            color: #f2f2f2;
            background-color: #FF6464;
        }

        #submit_button:hover {
            filter: drop-shadow(0 0 10px #FF6464);
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
                        <button type="submit" id="submit_button">ยืนยันลงชื่อออก</button>
                    </footer>
                </form>
            </div>
        </div>
    </div>
</body>
</html>