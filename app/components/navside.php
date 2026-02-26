<nav>
    <header>
        <h1>inthanin.team</h1>
        <p>
            คณะสีอินทนิล > <?= $page_name ?>
        </p>
    </header>

    <main>
        <h2>เมนู</h2>

        <div class="nav_button" <?php if ($page == "home") {echo 'id="selected"';} ?>>
            <a href="/">หน้าแรก</a>
        </div>
        <div class="nav_button" <?php if ($page == "about") {echo 'id="selected"';} ?>>
            <a href="/?page=about">เกี่ยวกับ</a>
        </div>
        <div class="nav_button" <?php if ($page == "login") {echo 'id="selected"';} ?>>
            <a href="/?page=login">เข้าสู่ระบบ</a>
        </div>
    
        <h3>เรียกดู</h3>
        <div class="nav_button" <?php if ($page == "table/enrolled") {echo 'id="selected"';} ?>>
            <a href="/?page=table/enrolled">การลงสมัคร</a>
        </div>
        <div class="nav_button" <?php if ($page == "table/athletes") {echo 'id="selected"';} ?>>
            <a href="/?page=table/athletes">รายชื่อนักกีฬา</a>
        </div>
        <div class="nav_button" <?php if ($page == "table/sports") {echo 'id="selected"';} ?>>
            <a href="/?page=table/sports">รายการที่รับสมัคร</a>
        </div>
        
    
        <h3>เพิ่มข้อมูล</h3>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">เข้าร่วมการแข่ง</a>
        </div>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">ลงสมัครนักกีฬา</a>
        </div>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">เพิ่มรายการแข่ง</a>
        </div>
    
        <h3>แก้ไขข้อมูล</h3>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">การลงแข่ง</a>
        </div>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">นักกีฬา</a>
        </div>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">รายการแข่ง</a>
        </div>
    
        <h3>ลบข้อมูล</h3>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">ถอนตัวจากการแข่ง</a>
        </div>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">ถอนตัวนักกีฬา</a>
        </div>
        <div class="nav_button" <?php if ($page == "") {echo 'id="selected"';} ?>>
            <a href="/?page=">ลบรายการแข่ง</a>
        </div>
    </main>

    <footer>
        <h3>สมาชิกแก๊งผู้จัดทำ</h3>
        <p>พัด & แบมบู & โฟกัส</p>
    </footer>
</nav>