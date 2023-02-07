<?php
include_once __DIR__ . '/app.php';
$page_title = 'Test data';
include_once __DIR__ . '/_components/header-kami.php';
?>
<?php 
$query ='SELECT * FROM meals ORDER BY name';
$result = mysqli_query($db_connection, $query);


?>
<div class="ps-3">
            <?php include __DIR__ . '/_components/dataDumpTable.php'; ?>
</div>

<?php include_once __DIR__ . '/_components/footer.php';
?>
