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
<style>
    .form-group {
        position: relative;
    }

    .form-group i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
        z-index: 2;
    }

    .form-group .form-control {
        padding-left: 45px;
        /* space for icon */
    }
</style>
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
<section class="contact2-sec sec-padding pt-0">
    <div class="offcanvas-overly"></div>
    <div class="container">
        <div class="text-center mb-5 pb-4">
            <h2 class="sec-title mb-1">Contact with Us</h2>
            <p>We are here to answer any question you may have any time.</p>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="contact-form">
                    <form id="whatsappForm" class="row">
                        <div class="col-lg-12 form-group">
                            <i class="feather-icon icon-user"></i>
                            <input class="form-control" name="name" type="text" placeholder="Name" id="name" required="">
                            <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <i class="feather-icon icon-mail"></i>
                            <select class="form-control" name="classes" id="classes" required>
                                <option value=""> Select Class</option>
                                <option value="Play Group"> Play Group</option>
                                <option value="Nursery"> Nursery</option>
                                <option value="KG, Prep"> KG, Prep</option>
                                <option value="Class I"> Class I</option>
                                <option value="Class II"> Class II</option>
                                <option value="Class III"> Class III</option>
                                <option value="Class IV"> Class IV</option>
                                <option value="Class V"> Class V</option>
                                <option value="Class VI"> Class VI</option>
                                <option value="Class VII"> Class VII</option>
                            </select>
                        </div>
                        <div class="col-lg-12 form-group">
                            <i class="feather-icon icon-phone-call"></i>
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone Number" required="">
                        </div>

                        <div class="col-lg-12 form-group">
                            <i class="feather-icon icon-phone-call"></i>
                            <input class="form-control" type="message" name="message" id="message" placeholder="Enter Message" required="">
                        </div>
                        <div class="col-lg-12 form-group">
                            <i class="feather-icon icon-mail"></i>
                            <select class="form-control" name="source" id="source" required>
                                <option value="">Select Source of Information</option>
                                <option value="Google">Google</option>
                                <option value="Social Media">Social Media</option>
                                <option value="Website">Website</option>
                                <option value="Hoarding">Hoarding</option>
                                <option value="Word of Mouth">Word of Mouth</option>
                            </select>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="btn btn-primary-orange  mt-4" data-bs-target="#exampleModalToggle2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.getElementById('whatsappForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Replace with your WhatsApp number
        const phoneNumber = "919034252500";
        const name = document.getElementById("name").value;
        const phone = document.getElementById("phone").value;
        const message = document.getElementById("message").value;
        const classes = document.getElementById("classes").value;
        const source = document.getElementById("source").value;
        const text = `Hello, my name is: ${name}
          Phone: ${phone}
		  Inquiry About: ${classes} 
		  Message: ${message} 
		  Source of Information: ${source}`;
        const url = `https://wa.me/${phoneNumber}?text=${text}`;
        window.open(url, 'index.php');
    });
</script>
<?php include('web/footer.php'); ?>