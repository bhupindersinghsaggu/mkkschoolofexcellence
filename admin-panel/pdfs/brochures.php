<?php include('../web/header.php'); ?>
<?php include('../web/aside.php'); ?>
<?php include('../web/navbar.php'); ?>
<?php include '../db.php'; ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/css/font-awesome.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<div class="main-content">
  <div class="container-fluid pt-5">
    <ul class="list-group">
      <?php
      $category = 'brochures';
      $stmt = $conn->prepare("SELECT * FROM pdfs WHERE category = ? ORDER BY id DESC");
      $stmt->bind_param("s", $category);
      $stmt->execute();
      $result = $stmt->get_result();

      while ($row = $result->fetch_assoc()) {
        echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
        echo htmlspecialchars($row['title']);
        echo ' <a href="uploads/pdfs/' . $row['file_name'] . '" class="btn btn-outline-primary btn-sm" target="_blank">Fee Reports</a>';
        echo '</li>';
      }
      ?>
    </ul>

  </div>