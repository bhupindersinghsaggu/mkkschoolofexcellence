
<?php

$meta_title = "Music & Dance | MKK School of Excellence, Panipat";
$meta_description = "Explore the Music & Dance program at MKK School of Excellence, Panipat — where students learn vocal and instrumental music, dance forms, and performing-arts under expert guidance to foster creativity, confidence and all-round development.";
$meta_keywords = "MKK School of Excellence, Music and Dance, Panipat school, CBSE school Panipat, school music classes, school dance classes, extracurricular activities Panipat, performing arts school Panipat";
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
                <h1 class="display-2 text-white">Dance & Music</h1>
            </div>
        </div>
    </div>
</section>
<section class="single-post sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                
            </div>
            <div class="col-lg-4">
                <?php include ('web/infra-links.php');?>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>