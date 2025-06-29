
<?php include '../db.php'; ?>

<?php

$id = intval($_GET['id']);

// Get file name
$stmt = $conn->prepare("SELECT file_name FROM pdfs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($file_name);
$stmt->fetch();
$stmt->close();

// Delete file
$path = 'uploads/pdfs/' . $file_name;
if (file_exists($path)) {
    unlink($path);
}

// Delete DB record
$stmt = $conn->prepare("DELETE FROM pdfs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

header("Location: pdf-list.php");
exit;
?>
