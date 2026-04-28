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
                <h1 class="display-2 text-white">Privacy Policy</h1>
            </div>
        </div>
    </div>
</section>
<section class="contact-card-sec sec-padding">
    <div class="container">
        <div class="row gy-3 gy-md-0">
            <div class="col-md-12">
                <div class="privacy-policy">

                    <h1>Privacy Policy</h1>
                    <p><em>Last Updated: [04/28/2026]</em></p>

                    <p>
                        At MKK School of Excellence (accessible from
                        <a href="https://mkkschoolofexcellence.com/" target="_blank">
                            https://mkkschoolofexcellence.com/
                        </a>), we value your privacy and are committed to protecting your personal information.
                        This Privacy Policy explains how we collect, use, and safeguard your data.
                    </p>

                    <hr>

                    <h2>1. Information We Collect</h2>
                    <p>We may collect the following information:</p>
                    <ul>
                        <li>Name, phone number, email address (through forms)</li>
                        <li>Student details (if submitted via admission forms)</li>
                        <li>Any information voluntarily provided by users</li>
                        <li>Technical data such as IP address, browser type, and device information</li>
                    </ul>

                    <hr>

                    <h2>2. How We Use Your Information</h2>
                    <p>We use your information to:</p>
                    <ul>
                        <li>Respond to inquiries and admissions</li>
                        <li>Provide school-related updates and communication</li>
                        <li>Improve our website and services</li>
                        <li>Run advertising campaigns (including Google Ads)</li>
                    </ul>

                    <hr>

                    <h2>3. Cookies and Tracking Technologies</h2>
                    <p>Our website uses cookies to enhance user experience. Cookies help us:</p>
                    <ul>
                        <li>Understand user behavior</li>
                        <li>Improve website performance</li>
                        <li>Deliver relevant advertisements</li>
                    </ul>
                    <p>You can disable cookies through your browser settings.</p>

                    <hr>

                    

                    <hr>

                    <h2>4. Data Sharing</h2>
                    <p>We do not sell or trade your personal information. However, we may share data with:</p>
                    <ul>
                        <li>Trusted service providers (for website and marketing services)</li>
                        <li>Legal authorities if required by law</li>
                    </ul>

                    <hr>

                    <h2>5. Data Security</h2>
                    <p>
                        We implement appropriate security measures to protect your data. However, no online
                        transmission is 100% secure.
                    </p>

                    <hr>

                    <h2>6. Children's Information</h2>
                    <p>
                        We collect limited student-related information only for admission and academic purposes
                        and ensure it is handled responsibly.
                    </p>

                    <hr>

                    <h2>7. Your Consent</h2>
                    <p>By using our website, you consent to our Privacy Policy.</p>

                    <hr>

                    <h2>8. Changes to This Policy</h2>
                    <p>
                        We may update this Privacy Policy from time to time. Changes will be posted on this page.
                    </p>

                    <hr>

                    <h2>9. Contact Us</h2>
                    <p>If you have any questions, you can contact us:</p>

                    <p>
                        <strong>MKK School of Excellence</strong><br>
                        Website:
                        <a href="https://mkkschoolofexcellence.com/" target="_blank">
                            https://mkkschoolofexcellence.com/
                        </a><br>
                        Email: [soepanipat@gmail.com]<br>
                        Phone: [90342 52500]
                    </p>

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