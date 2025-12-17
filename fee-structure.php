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
                <h5> Registration fee ₹1000</h5>
                <!-- <p class="line-heigth"> Admission fee ₹30000 ( waived for initial 100 admissions for 2026 -27 )</p> -->
                <p class="line-heigth"> Tuition fee ( PreN to Prep ) - ₹6000/-</p>
                <p class="line-heigth"> Classes 1 to 5 - ₹7250/-</p>
                <p class="line-heigth"> Class 6 - ₹7500/-</p>
                <p class="line-heigth"> Class 7 - ₹7750/-</p>
                <p class="line-heigth">A Sibling discount of 20% on the Tuition fee of the elder sibling.</p>
                <h5> Transport charges</h5>
                <p class="line-heigth"> 1800/- within 1 KM</p>
                <p class="line-heigth"> 2200/- afterwards</p>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>