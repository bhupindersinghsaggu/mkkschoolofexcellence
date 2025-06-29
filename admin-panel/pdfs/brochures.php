<?php include '../db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Brochures</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-5">

<h2>Brochures</h2>
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
  echo ' <a href="uploads/pdfs/' . $row['file_name'] . '" class="btn btn-outline-primary btn-sm" target="_blank">View PDF</a>';
  echo '</li>';
}
?>
</ul>

</body>
</html>
