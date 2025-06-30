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
        <h2>Upload PDF</h2>
        <form method="POST" action="upload-pdf.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Category</label>
                <select name="category" class="form-control" required>
                    <option value="fee-structure">Fee Structure</option>
                    <option value="book-list">Book List</option>
                    <option value="job-vacancy">Job Vacancy</option>
                </select>
            </div>
            <div class="mb-3">
                <label>Select PDF</label>
                <input type="file" name="pdf" class="form-control" accept="application/pdf" required>
            </div>
            <div class="d-flex justify-item-center">
                <button type="submit" class="btn btn-primary ">Upload</button>
                <a href="pdf-list.php" class="btn btn-danger ml-1">View PDF</a>
            </div>
        </form>
    </div>
</div>