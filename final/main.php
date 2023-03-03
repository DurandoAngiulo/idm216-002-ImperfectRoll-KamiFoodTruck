<?php
include_once __DIR__ . '/app.php';
$page_title = 'database Tables';
include_once __DIR__ . '/_components/header-kami.php';
?>
<?php 
$query ='SELECT * FROM menu ORDER BY name';
$result = mysqli_query($db_connection, $query);


?>
<div class="px-5 pt-5">
            <?php include __DIR__ . '/_components/menuTable.php'; ?>
</div>

<?php include_once __DIR__ . '/_components/footer.php';
?>
