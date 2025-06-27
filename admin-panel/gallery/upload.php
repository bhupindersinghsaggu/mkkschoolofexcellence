<?php
include '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $date = $_POST['upload_date'];
    $url = $_POST['url'];

    $image = $_FILES['image']['name'];
    $target = "uploads/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $stmt = $conn->prepare("INSERT INTO photos (title, upload_date, url, image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $date, $url, $image);
        $stmt->execute();
        echo "Uploaded successfully.";
        header("Location: index.php");
    } else {
        echo "Upload failed.";
    }

    
}
?>
