<?php include('web/header.php'); ?>

<?php include('./admin-panel/db.php'); ?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<section class="promo-sec" style="background: url('images/promo-bg.jpg')no-repeat center center / cover;">
    <img src="images/promo-left.png" alt="" class="anim-img">
    <img src="images/promo-right.png" alt="" class="anim-img anim-right">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="display-2 text-white">Fee Structure</h1>
            </div>
        </div>
    </div>
</section>
<section class="blog-sec bg-shade sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php
                $category = 'fee-structure';
                $stmt = $conn->prepare("SELECT title, file_name FROM pdfs WHERE category = ? ORDER BY id DESC");
                $stmt->bind_param("s", $category);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows === 0) {
                    echo "<p>No Fee found.</p>";
                } else {
                    echo "<ul class='list-group'>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<li class='list-group-item d-flex justify-content-between align-items-center'>";
                        echo htmlspecialchars($row['title']);
                        echo "<span>";
                        echo "<a class='btn btn-sm btn-outline-primary me-2' target='_blank' href='./admin-panel/pdfs/uploads/pdfs/" . $row['file_name'] . "'>View</a>";
                        echo "</span></li>";
                    }
                    echo "</ul>";
                }
                ?>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>