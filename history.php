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
                <h1 class="display-2 text-white">History</h1>
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
                <aside class="sidebar ps-lg-4">
                    <div class="widget search-widget">
                        <form action="#" class="position-relative">
                            <input type="search" placeholder="Search keyword">
                            <button class="btn btn-primary position-absolute  top-0"><i class="feather-icon icon-search"></i></button>
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h3 class="widget-title">Popular Categories</h3>
                        <div class="widget-inner">
                            <ul>
                                <li><a href="history.php">History<span><i class="feather-icon icon-chevron-right"></i></span></a></li>
                                <li><a href="vision-mission.php">Vision & Mission<span><i class="feather-icon icon-chevron-right"></i></span></a></li>
                                <li><a href="principal-message.php">Message From Principal<span><i class="feather-icon icon-chevron-right"></i></span></a></li>
                                <li><a href="chairman-message.php">Message From Principal<span><i class="feather-icon icon-chevron-right"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget widget_author">
                        <div class="widget-inner p-4 text-center">
                            <h4 class="display-5">Follow us</h4>
                            <div class="footer-social mt-4">
                                <a href="#"><i class="feather-icon icon-facebook"></i></a>
                                <a href="#"><i class="feather-icon icon-instagram"></i></a>
                                <a href="#"><i class="feather-icon icon-youtube"></i></a>
                            </div>
                        </div>
                    </div><!-- Widget End -->
                </aside>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>