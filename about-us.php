<?php

$meta_title = "About MKK School of Excellence | Vision, Mission & Values";
$meta_description = "Learn about the mission, vision, and values that define MKK School of Excellence’s commitment to quality education in Panipat.";
$meta_keywords = "About MKK School, School Vision Panipat, Mission Statement, Best School Values, Education Philosophy Panipat";
?>

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
                <h1 class="display-2 text-white">About us</h1>
            </div>
        </div>
    </div>
</section>
<section class="single-post sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <p class="line-heigth">Welcome to MKK School of Excellence, where education meets inspiration.
                    We believe that every child is born with unique talents and unlimited potential, and our mission is to nurture that potential through holistic and value-based education.
                </p>
                <p class="line-heigth"> At MKK School of Excellence, learning goes beyond textbooks. Our curriculum is designed to develop academic excellence, creativity, confidence, discipline, leadership, and strong moral values. With experienced faculty, modern teaching methods, and a safe, supportive environment, we ensure that every student grows intellectually, emotionally, socially, and physically.

                    Our school campus provides well-equipped classrooms, advanced labs, smart learning facilities, sports and activity arenas, and opportunities for cultural and personality development. We aim to create responsible global citizens who are ready to face the challenges of the future with courage and capability.</p>
            </div>
            <div class="col-lg-4">
                <?php include('web/infra-links.php'); ?>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>