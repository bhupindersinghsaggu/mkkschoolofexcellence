<?php include('../web/header.php') ?>;
<?php include('../web/aside.php') ?>;
<?php include('../web/navbar.php') ?>;
  <?php include ('../db.php')?>;
<?php

$id = intval($_GET['id']);

$res = $conn->query("SELECT image FROM photos WHERE id=$id");
$row = $res->fetch_assoc();
if ($row && file_exists('uploads/' . $row['image'])) {
    unlink('uploads/' . $row['image']);
}

$conn->query("DELETE FROM photos WHERE id=$id");
header("Location: index.php");
exit;
?>
