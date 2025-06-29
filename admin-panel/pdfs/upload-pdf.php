
<?php include '../db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $upload_date = date('Y-m-d');
    $file = $_FILES['pdf']['name'];

    $targetDir = "uploads/pdfs/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetPath = $targetDir . basename($file);

    if (move_uploaded_file($_FILES['pdf']['tmp_name'], $targetPath)) {
        $stmt = $conn->prepare("INSERT INTO pdfs (title, category, file_name, upload_date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $category, $file, $upload_date);
        $stmt->execute();
        echo "<div class='alert alert-success'>PDF uploaded successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>PDF upload failed.</div>";
    }
}
?>
