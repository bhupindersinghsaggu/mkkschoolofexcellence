<?php include('../web/header.php'); ?>
<?php include('../web/aside.php'); ?>
<?php include('../web/navbar.php'); ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="../assets/css/font-awesome.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">
<!-- Main Content -->
<div class="main-content">
    <div class="container-fluid pt-5">
        <div class="content-box">
            <h2 class="mb-3">Welcome, Admin 👋</h2>
            <?php include '../db.php'; ?>
            <style>
                .preview-img {
                    max-height: 50px;
                    margin-top: 10px;
                }
            </style>
           
                <h2 class="mb-4">Upload New Photo</h2>
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label>Image Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Upload Date</label>
                        <input type="date" name="upload_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>URL</label>
                        <input type="url" name="url" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Select Image</label>
                        <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)" required>
                        <img id="preview" class="preview-img" />
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
                <hr class="my-5">
                <h2>Gallery</h2>
                <div class="row">
                    <?php
                    $result = $conn->query("SELECT * FROM photos ORDER BY id DESC");
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <div class="col-md-2 mb-2">
                            <div class="card">
                                <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                    <p class="card-text">
                                        Date: <?php echo $row['upload_date']; ?><br>
                                        URL: <a href="<?php echo $row['url']; ?>" target="_blank"><?php echo $row['url']; ?></a>
                                    </p>
                                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                    <a href="uploads/<?php echo $row['image']; ?>" download class="btn btn-success btn-sm">Download</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <script>
                    function previewImage(event) {
                        const reader = new FileReader();
                        reader.onload = function() {
                            document.getElementById('preview').src = reader.result;
                        };
                        reader.readAsDataURL(event.target.files[0]);
                    }
                </script>
            
        </div>
    </div>
</div>

<?php include('../web/footer.php'); ?>