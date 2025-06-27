<?php include('../web/header.php'); ?>
<?php include('../web/aside.php'); ?>
<?php include('../web/navbar.php'); ?>
<?php include '../db.php'; ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/css/font-awesome.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<!-- Main Content -->
<div class="main-content">
  <div class="container-fluid pt-5">
    <div class="content-box">
      <h2 class="mb-3">Welcome, Admin 👋</h2>
      <table class="table table-bordered">
        <thead>
          <tr>

            <th>Image</th>
            <th>Title</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $result = $conn->query("SELECT * FROM photos ORDER BY id DESC");
          while ($row = $result->fetch_assoc()) {
            echo "<tr>
        <td><img src='uploads/{$row['image']}' height='60'></td>
        <td>{$row['title']}</td>
        <td>{$row['upload_date']}</td>
        <td>
          <a href='edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
          <a href='delete.php?id={$row['id']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Delete this photo?\")'>Delete</a>
        </td>
      </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include('../web/footer.php'); ?>