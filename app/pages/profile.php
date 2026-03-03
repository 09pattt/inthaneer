<?php

$page_name = "โปรไฟล์"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require HEADER; ?>
    <style>
        #profile_space {
            width: 100%;
            height: fit-content;
            display: flex;
            justify-content: center;
        }

        #profile {
            width: 688px;
            background-color: #f2f2f2;
            border-radius: 1rem;
            overflow: hidden;
            display: grid;
            grid-template-rows: repeat(3, auto);
        }

        #profile > header {
            background-color: #602560;
            color: #FAFAFA;
            padding: 0.5rem 1rem 0.5rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #profile > main {
            padding: 1rem;
        }

        #profile > footer {
            background-color: #602560;
            color: #FAFAFA;
            padding: 0.5rem 1rem 0.5rem 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #profile_main_top {
            height: fit-content;
            display: grid;
            grid-template-columns: auto 1fr;
        }

        #profile_main_user_img_cover {
            height: 250px;
            aspect-ratio: 3 / 4;
            overflow: hidden;
            border-radius: 1rem;
            filter: drop-shadow(5px 5px 10px #0008);
        }

        #profile_main_user_img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }

        #profile_main_user_info_cover {
            padding-left: 1rem;
            color: #602560;
        }
        
        #profile_main_content {
            overflow: hidden;
            border-radius: 1rem;
            background-color: #eaeaea;
        }

        #profile_main_content > header {
            padding: 0.5rem;
            color: #fff;
            background-color: #008BFF;
        }

        #profile_main_content > main {
            padding: 0.5rem;
        }

        .banner {
            display: grid;
            grid-template-columns: auto 1fr auto;
        }

        .banner_badge {
            height: 120px;
            aspect-ratio: 1 / 1;
            border-radius: 0.5rem;
        }

        .banner_content {
            padding-left: 1rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .info_banner {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .delete_space {
            width: fit-content;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-right: 1rem;
        }

        .delete_space {
            color: #FF6464;
            cursor: default;
        }

        .delete_button {
            width: 2rem;
            height: 2rem;
            padding: 0.2rem;
            border-radius: 50%;
            border: none;
            background-color: #FF6464AA;
            transition: all 200ms ease;
        }

        .delete_button:hover {
            filter: drop-shadow(0 0 10px #FF6464AA);
        }

        .delete_button img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
    </style>
</head>
<body>
    <?php require NAVSIDE; ?>
    <div id="main_space">
        <?php require LOGO; ?>

        <div style="height: 2rem;"></div>

        <div id="profile_space">
            <div id="profile">
                <header>
                    <h1>โปรไฟล์อินทนิลของ<?= $userInfo['firstname'] ?></h1>
                    <a href="/?route=/pages/update/users" class="yellow_button">แก้ไขข้อมูล</a>
                </header>
                <main>
                    <div id="profile_main_top">
                        <div id="profile_main_user_img_cover">
                            <img id="profile_main_user_img" src="/assets/images/elements/person.png" alt="">
                        </div>
                        <div id="profile_main_user_info_cover">
                            <h1 style="font-weight: 700;">@<?= $userInfo['username'] ?></h1>
                            <h2>เลขประจำตัวนักเรียน : <?= $userInfo['student_id']?></h2>
                            <h2>ชื่อสกุล : <?= $userInfo['prefix'] . $userInfo['firstname'] . ' ' . $userInfo['surname'] ?></h2>
                            <h2>เพศ : <?= $userInfo['gender'] == 0 ? 'ชาย' : 'หญิง' ?></h2>
                            <h2>ชั้น : ม.<?= $userInfo['grade'] . '/' . $userInfo['class'] ?></h2>
                            <h2 style="font-weight: 700;">คณะสีอินทนิล</h2>
                        </div>
                    </div>

                    <div style="height: 20px;"></div>
                    <hr>
                    <div style="height: 20px;"></div>

                    <div id="profile_main_content">
                        <header>
                            <h2>ข้อมูลและบันทึกของ<?= $userInfo['firstname'] ?></h2>
                        </header>
                        <main>
                            <h2>ข้อมูลนักกีฬา</h2>
                            <?php if ($isAthlete): ?>
                                <div class="banner">
                                    <img src="/assets/images/elements/athlete_badge.png" alt="" class="banner_badge">
                                    <div class="banner_content">
                                        <strong>ชื่อนักกีฬา : <?= $userInfo['prefix'] . $userInfo['firstname'] . ' ' . $userInfo['surname']?></strong>
                                        <p>ประเภท : นักกีฬา<?= $userInfo['gender'] == 0 ? 'ชาย' : 'หญิง' ?></p>
                                        <p>ระดับ : 
                                            <?php
                                                if ($userInfo['grade'] <= 3) {
                                                    echo 'มัธยมศึกษาตอนต้น';
                                                } else {
                                                    echo 'มัธยมศึกษาตอนปลาย';
                                                }
                                            ?>
                                        </p>
                                    </div>
                                    <form action="/?route=/features/delete/athletes" class="delete_space" method="POST">
                                        <input type="text" hidden name="student_id" value="<?= $userInfo['student_id'] ?>">
                                        <button type="submit" class="delete_button">
                                            <img src="/assets/images/elements/delete.png" alt="">
                                        </button>
                                        <p>ถอนตัว</p>
                                    </form>
                                </div>

                                <div style="height: 10px;"></div>
                                <h2>ข้อมูลการลงแข่ง</h2>

                                <?php 
                                    $enrolledStmt = $pdo->prepare("SELECT sport_id FROM enrolled WHERE student_id = :student_id");
                                    $enrolledStmt->execute([
                                        'student_id' => $userInfo['student_id']
                                    ]);
                                    $sports = $enrolledStmt->fetchAll(PDO::FETCH_ASSOC);
                                    $interval = 0;
                                ?>
                                <?php if ($sports): ?>
                                    <?php foreach ($sports as $sport): ?>
                                        <?php
                                            $interval++;
                                            $sportStmt = $pdo->prepare("SELECT * FROM sports WHERE sport_id = :sport_id");
                                            $sportStmt->execute([
                                                'sport_id' => $sport['sport_id']
                                            ]);
                                            $sportInfo = $sportStmt->fetch(PDO::FETCH_ASSOC);
                                        ?>
                                        <div class="banner">
                                            <img src="/assets/images/elements/<?= $sportInfo['sport_name'] ?>.png" alt="" class="banner_badge">
                                            <div class="banner_content">
                                                <strong>รายการ : <?= $sportInfo['sport_name'] ?></strong>
                                                <p>ประเภท : <?= $sportInfo['gender'] == 0 ? 'ชาย' : 'หญิง' ?></p>
                                                <p>ระดับ : <?= $sportInfo['grade'] == 0 ? 'ระดับชั้นมัธยมศึกษาตอนต้น' : 'ระดับชั้นมัธยมศึกษาตอนปลาย' ?></p>
                                            </div>
                                            <form action="/?route=/features/delete/enrolled" class="delete_space" method="POST">
                                                <input type="text" hidden name="student_id" value="<?= $userInfo['student_id'] ?>">
                                                <input type="text" hidden name="sport_id" value="<?= $sportInfo['sport_id'] ?>">
                                                <button type="submit" class="delete_button">
                                                    <img src="/assets/images/elements/delete.png" alt="">
                                                </button>
                                                <p>ถอนตัว</p>
                                            </form>
                                        </div>
                                    <?php endforeach; ?>
                                    <?php if ($interval <= 2): ?>
                                        <div class="info_banner">
                                            <h2>คุณยังสามารถลงแข่งได้อีก <?= 3 - $interval ?> รายการ</h2>
                                            <p>นักกีฬาหนึ่งคนสามารถเข้าร่วมได้สูงสุดคนละ 3 รายการเลยนะ ฉะนั้นแล้วคุณจะเข้าร่วมการแข่งอีกไหม</p>
                                            <a href="/?route=/pages/insert/enrolled" class="yellow_button">เข้าร่วม</a>
                                        </div>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="info_banner">
                                        <h2>ไม่มีบันทึกการเข้าร่วม</h2>
                                        <p>ก็เพราะว่ายังไม่ได้เข้าร่วมการแข่งไหนเลย จะเข้าร่วมเลยไหม?</p>
                                        <a href="/?route=/pages/insert/enrolled" class="yellow_button">เข้าร่วมการแข่ง</a>
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <div class="info_banner">
                                    <h2>ยังไม่มีอะไรตรงนี้เลย</h2>
                                    <p>เพราะว่ายังไม่ได้ลงสมัครนักกีฬาเลย จะลงสมัครเลยไหม?</p>
                                    <a href="/?route=/pages/insert/athletes" class="blue_button">ลงสมัครนักกีฬา</a>
                                </div>
                            <?php endif; ?>
                        </main>
                    </div>
                </main>
                <footer>
                    <a href="/?route=/pages/recovery">พบปัญหา</a>
                    <a href="/?route=/pages/signout" class="red_button">ออกจากระบบ</a>
                </footer>
            </div>
        </div>
        <?php require FOOTER; ?>
    </div>
</body>
</html>