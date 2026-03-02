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
            <a href="/">หน้าแรก</a>
        </div>
        <div class="nav_button" <?php if ($route == "/pages/about") {echo 'id="selected"';} ?>>
            <a href="/?route=/pages/about">เกี่ยวกับ</a>
        </div>
        <?php if ($isLoggedIn): ?>
            <div class="nav_button" <?php if ($route == "/pages/signout") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/signout">ออกจากระบบ</a>
            </div>
        <?php else: ?>
            <div class="nav_button" <?php if ($route == "/pages/signin") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/signin">เข้าสู่ระบบ</a>
            </div>
            <div class="nav_button" <?php if ($route == "/pages/register") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/register">ลงทะเบียน</a>
            </div>
        <?php endif; ?>
    
        <h3>เรียกดู</h3>
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
            <div class="nav_button" <?php if ($route == "/pages/insert/enrolled") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/insert/enrolled">เข้าร่วมการแข่ง</a>
            </div>
            <div class="nav_button" <?php if ($route == "/pages/insert/athletes") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/insert/athletes">ลงสมัครนักกีฬา</a>
            </div>
            <div class="nav_button" <?php if ($route == "/pages/insert/sports") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/insert/sports">เพิ่มรายการแข่ง</a>
            </div>
            
            <h3>แก้ไขข้อมูล</h3>
            <div class="nav_button" <?php if ($route == "/pages/update") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/update">การลงแข่ง</a>
            </div>
            <div class="nav_button" <?php if ($route == "/pages/update") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/update">นักกีฬา</a>
            </div>
            <div class="nav_button" <?php if ($route == "/pages/update") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/update">รายการแข่ง</a>
            </div>
            
            <h3>ลบข้อมูล</h3>
            <div class="nav_button" <?php if ($route == "/pages/delete") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/delete">ถอนตัวจากการแข่ง</a>
            </div>
            <div class="nav_button" <?php if ($route == "/pages/delete") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/delete">ถอนตัวนักกีฬา</a>
            </div>
            <div class="nav_button" <?php if ($route == "/pages/delete") {echo 'id="selected"';} ?>>
                <a href="/?route=/pages/delete">ลบรายการแข่ง</a>
            </div>
        <?php endif; ?>

        <h3>อื่นๆ</h3>
        <div class="nav_button" <?php if ($route == "/pages/recovery") {echo 'id="selected"';} ?>>
            <a href="/?route=/pages/recovery">ฝ่ายช่วยเหลือ</a>
        </div>
    </main>

    <footer>
        <h3><?= ($isLoggedIn) ? $firstname . ' ' . $surname : 'ยังไม่ได้เข้าสู่ระบบ' ?></h3>
        <p><?= $username ? '@' . $username : 'ผู้เข้าชม' ?></p>
    </footer>
</nav>