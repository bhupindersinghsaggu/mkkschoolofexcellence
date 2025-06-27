<?php include('../web/header.php'); ?>
<?php include('../web/aside.php'); ?>
<?php include('../web/navbar.php'); ?>
<?php include '../db.php'; ?>

<?php
$id = intval($_GET['id']);

// Fetch current data
$stmt = $conn->prepare("SELECT * FROM photos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($pid, $title, $upload_date, $url, $image);
$stmt->fetch();
$stmt->close();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_title = $_POST['title'];
    $new_date = $_POST['upload_date'];
    $new_url = $_POST['url'];

    $new_image = $_FILES['image']['name'];
    $update_image = false;

    if (!empty($new_image)) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $target = $uploadDir . basename($new_image);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            // Delete old image
            if (file_exists($uploadDir . $image)) {
                unlink($uploadDir . $image);
            }
            $update_image = true;
        }
    }

    if ($update_image) {
        $stmt = $conn->prepare("UPDATE photos SET title = ?, upload_date = ?, url = ?, image = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $new_title, $new_date, $new_url, $new_image, $id);
    } else {
        $stmt = $conn->prepare("UPDATE photos SET title = ?, upload_date = ?, url = ? WHERE id = ?");
        $stmt->bind_param("sssi", $new_title, $new_date, $new_url, $id);
    }

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Photo updated successfully.</div>";
        // Refresh updated values
        $title = $new_title;
        $upload_date = $new_date;
        $url = $new_url;
        if ($update_image) $image = $new_image;
    } else {
        echo "<div class='alert alert-danger'>Update failed.</div>";
    }
}
?>


<link href="../assets/css/style.css" rel="stylesheet">
<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid pt-5">
        <div class="content-box">
            <h2 class="mb-3">Welcome, Admin 👋</h2>
            <?php include '../db.php'; ?>
            <style>
                .preview-img {
                    max-height: 150px;
                    margin-top: 10px;
                }
            </style>
            <h2>Edit Photo</h2>
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>Image Title</label>
                    <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($title) ?>" required>
                </div>
                <div class="mb-3">
                    <label>Upload Date</label>
                    <input type="date" name="upload_date" class="form-control" value="<?= $upload_date ?>" required>
                </div>
                <div class="mb-3">
                    <label>URL</label>
                    <input type="url" name="url" class="form-control" value="<?= htmlspecialchars($url) ?>" required>
                </div>
                <div class="mb-3">
                    <label>Current Image</label><br>
                    <img src="uploads/<?= htmlspecialchars($image) ?>" class="preview-img mb-2">
                    <input type="file" name="image" class="form-control" accept="image/*">
                    <small class="text-muted">Leave blank to keep current image</small>
                </div>
                <button type="submit" class="btn btn-primary">Update Photo</button>
                <a href="index.php" class="btn btn-secondary">Back to Gallery</a>
            </form>
        </div>
    </div>
</div>s