<?php include('../web/header.php'); ?>
<?php include('../web/aside.php'); ?>
<?php include('../web/navbar.php'); ?>
<?php include '../db.php'; ?>




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/css/font-awesome.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<?php
include 'db.php';
$id = intval($_GET['id']);

// Get data
$stmt = $conn->prepare("SELECT * FROM pdfs WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$data = $stmt->get_result()->fetch_assoc();
$stmt->close();

// Update
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $category = $_POST['category'];
  $file_name = $data['file_name']; // default to old file

  if (!empty($_FILES['pdf']['name'])) {
    $uploadDir = 'uploads/pdfs/';
    $newFile = basename($_FILES['pdf']['name']);
    if (move_uploaded_file($_FILES['pdf']['tmp_name'], $uploadDir . $newFile)) {
      // delete old
      if (file_exists($uploadDir . $file_name)) {
        unlink($uploadDir . $file_name);
      }
      $file_name = $newFile;
    }
  }

  $stmt = $conn->prepare("UPDATE pdfs SET title = ?, category = ?, file_name = ? WHERE id = ?");
  $stmt->bind_param("sssi", $title, $category, $file_name, $id);
  $stmt->execute();

  echo "<div class='alert alert-success'>PDF updated successfully.</div>";
  $data = ['title' => $title, 'category' => $category, 'file_name' => $file_name];
}
?>
<div class="main-content">
  <div class="container-fluid pt-5">
    <h2>Edit PDF</h2>
    <form method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($data['title']) ?>" required>
      </div>
      <div class="mb-3">
        <label>Category</label>
        <select name="category" class="form-control" required>
          <option value="brochures" <?= $data['category'] === 'brochures' ? 'selected' : '' ?>>Brochures</option>
          <option value="reports" <?= $data['category'] === 'reports' ? 'selected' : '' ?>>Reports</option>
          <option value="forms" <?= $data['category'] === 'forms' ? 'selected' : '' ?>>Forms</option>
        </select>
      </div>
      <div class="mb-3">
        <label>Replace PDF</label>
        <input type="file" name="pdf" class="form-control" accept="application/pdf">
        <small class="text-muted">Leave blank to keep existing file: <?= $data['file_name'] ?></small>
      </div>
      <button type="submit" class="btn btn-primary">Update PDF</button>
      <a href="pdf-list.php" class="btn btn-secondary">Back</a>
    </form>

  </div>