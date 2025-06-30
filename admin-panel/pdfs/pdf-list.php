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
    <h2>Manage Docs</h2>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Title</th>
          <th>Category</th>
          <th>File</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = $conn->query("SELECT * FROM pdfs ORDER BY id DESC");
        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['category']) ?></td>
            <td><a href="uploads/pdfs/<?= $row['file_name'] ?>" target="_blank">View</a></td>
            <td><?= $row['upload_date'] ?></td>
            <td>
              <a href="edit-pdf.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
              <a href="delete-pdf.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <a href="add-pdf.php" class="btn btn-secondary">Back</a>

  </div>