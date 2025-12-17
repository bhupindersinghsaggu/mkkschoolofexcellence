<?php

$meta_title = "Contact MKK School of Excellence | Panipat CBSE School";
$meta_description = "Get in touch with MKK School of Excellence, Panipat for queries, admissions, or to schedule a campus visit.";
$meta_keywords = "Contact MKK School Panipat, School Address, CBSE School Near Me, Panipat School Enquiry, Visit MKK Campus";
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
                <h1 class="display-2 text-white">Contact</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-card-sec sec-padding">
		<div class="container">
			<div class="row gy-3 gy-md-0">
				<div class="col-md-4">
					<div class="card bg-shade text-center">
						<span class="icon-lg mx-auto bg-secondary text-info rounded-circle mb-4"><i class="feather-icon icon-phone"></i></span>
						<h5>Call Us</h5>
						<p><a class="text-reset" href="tel:90342 52500">90342 52500</a></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-shade text-center">
						<span class="icon-lg mx-auto bg-secondary text-info rounded-circle mb-4"><i class="feather-icon icon-mail"></i></span>
						<h5>Email Us</h5>
						<ul>
							<li><a class="text-reset" href="mailto:soepanipat@gmail.com">soepanipat@gmail.com
								</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card bg-shade text-center">
						<span class="icon-lg mx-auto bg-secondary text-info rounded-circle mb-4"><i class="feather-icon icon-map-pin"></i></span>
						<h5>Locations</h5>
						<p>Plot No.1, Sector-18, Huda, Panipat</p>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include('web/footer.php'); ?>