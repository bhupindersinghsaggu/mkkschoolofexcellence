<?php

$meta_title = "Modern School Facilities | MKK School of Excellence Panipat";
$meta_description = "Experience the advanced infrastructure at MKK School – from smart classrooms to labs, library, and sports arenas in Panipat.";
$meta_keywords = " School Infrastructure Panipat, Smart Classrooms, School Facilities Haryana, MKK Campus Tour, Best School Labs Panipat";
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
                <h1 class="display-2 text-white">Facilities / Infrastructure</h1>
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