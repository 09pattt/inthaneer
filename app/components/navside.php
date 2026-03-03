<nav>
    <header>
        <h1>inthanin.team</h1>
        <p>
            คณะสีอินทนิล > <?= $page_name ?>
        </p>
    </header>

    <main>
        <h2>เมนู</h2>

        <div class="nav_button" <?php if ($route == "/pages/home") {echo 'id="selected"';} ?>>
            <a href="/?route=/pages/home">หน้าแรก</a>
        </div>
        <div class="nav_button" <?php if ($route == "/pages/about") {echo 'id="selected"';} ?>>
            <a href="/?route=/pages/about">เกี่ยวกับ</a>
        </div>
        <?php if ($isLoggedIn): ?>
            <div class="nav_button" <?php if ($route == "/pages/profile") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/profile">โปรไฟล์ ดู/แก้ไขข้อมูล</a>
            </div>
        <?php else: ?>
            <div class="nav_button" <?php if ($route == "/pages/signin") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/signin">เข้าสู่ระบบ</a>
            </div>
            <div class="nav_button" <?php if ($route == "/pages/register") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/register">ลงทะเบียน</a>
            </div>
        <?php endif; ?>
    
        <h3>ดูตารางข้อมูล</h3>
        <div class="nav_button" <?php if ($route == "/pages/table/enrolled") {echo 'id="selected"';} ?>>
            <a href="/?route=/pages/table/enrolled">การลงสมัคร</a>
        </div>
        <div class="nav_button" <?php if ($route == "/pages/table/athletes") {echo 'id="selected"';} ?>>
            <a href="/?route=/pages/table/athletes">รายชื่อนักกีฬา</a>
        </div>
        <div class="nav_button" <?php if ($route == "/pages/table/sports") {echo 'id="selected"';} ?>>
            <a href="/?route=/pages/table/sports">รายการที่รับสมัคร</a>
        </div>
        
        <?php if ($isLoggedIn): ?>
            <h3>เพิ่มข้อมูล</h3>
            <?php if ($isAthlete): ?>
                <div class="nav_button" <?php if ($route == "/pages/insert/enrolled") {echo 'id="selected"';} ?>>
                    <a href="/?route=/pages/insert/enrolled">เข้าร่วมการแข่ง</a>
                </div>
            <?php else: ?>
                <div class="nav_button" <?php if ($route == "/pages/insert/athletes") {echo 'id="selected"';} ?>>
                    <a href="/?route=/pages/insert/athletes">ลงสมัครนักกีฬา</a>
                </div>
            <?php endif; ?>
        <?php endif; ?>

        <h3>อื่นๆ</h3>
        <div class="nav_button" <?php if ($route == "/pages/recovery") {echo 'id="selected"';} ?>>
            <a href="/?route=/pages/recovery">ฝ่ายช่วยเหลือ</a>
        </div>
    </main>

    <footer>
        <a href="/?route=/pages/profile" id="profile_link"></a>
        <div id="footer_img_cover">
            <img id="footer_img" src="/assets/images/elements/person.png" alt="">
        </div>
        <div id="footer_content">
            <h3 id="footer_h3"><?= ($isLoggedIn) ? $userInfo['prefix'] . '' .$userInfo['firstname'] . ' ' .$userInfo['surname'] : 'ยังไม่ได้เข้าสู่ระบบ' ?></h3>
            <p id="footer_p"><?= ($isLoggedIn) ? '@' . $userInfo['username'] . ' ' . $userInfo['student_id'] . ' ม.' . $userInfo['grade'] . '/' . $userInfo['class'] : 'ผู้เข้าชม' ?></p>
        </div>
    </footer>
</nav>