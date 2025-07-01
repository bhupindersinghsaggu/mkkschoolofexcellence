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
            <div class="col-xl-6 col-md-10 order-1 order-md-2">
                <div class="about-txt">
                    <h2 class="sec-title position-relative pd-50">GPS App For  <span class="color">Transport</span></h2>
                    <p class="line-heigth"><h5 >User: <span class="pur-color">soe</span></h5></p>
                    <p class="line-heigth"><h5 >Password:<span class="pur-color">123456</span></h5></p>
                    <div class="d-sm-flex align-items-center mt-5">
                        <a href="/app-gosafe-release.apk" class="btn btn-primary shadow">Download APP</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>