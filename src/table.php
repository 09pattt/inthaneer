<?php

require 'features/connect.php';

$stmt = $pdo->query("SELECT * FROM athletes");
$athletes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<h2>Data : </h2>

<?php foreach ($athletes as $athlete): ?>
    <p>
        <?php echo $athlete['student_id']; ?> -
        <?php echo $athlete['firstname']; ?>
    </p>
<?php endforeach; ?>