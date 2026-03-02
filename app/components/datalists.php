<div hidden>
    <datalist id="student_id">
        <?php
            $stmt = $pdo->query("SELECT student_id FROM users");
            $stmt->execute();
            while ($student_id = $stmt->fetchColumn()) {
                echo "<option value='$student_id'>";
            }
        ?>
    </datalist>

    <datalist id="sport_id">
        <?php
            $stmt = $pdo->query("SELECT sport_id FROM sports");
            $stmt->execute();
            while ($sport = $stmt->fetchColumn()) {
                echo "<option value='$sport'>";
            }
        ?>
    </datalist>
</div>