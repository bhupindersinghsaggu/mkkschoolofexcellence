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
                <h1 class="display-2 text-white">Principal Message</h1>
            </div>
        </div>
    </div>
</section>
<section class="single-post sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="choose-media position-relative">
                    <img src="images/principal.jpg" alt="About" class="img-fluid">
                  </div>
                <p class="line-heigth">Greetings and welcome to the School of Excellence !</p>
                <p class="line-heigth"> At the School of Excellence, we are more than just a place of learning—we are a student centered community dedicated to nurturing hearts, shaping minds, and preparing young lives to shine as lights in the world.
                    Rooted in values, our vision is to raise up confident, compassionate, and capable students who live with purpose and integrity. We believe that true excellence begins with a heart aligned to God and is reflected in every area of life—academics, relationships, service, and personal growth.
                    In today’s changing world, we embrace a Hybrid Model of Education that combines the richness of classroom experience with the flexibility and innovation of digital learning. This approach allows us to reach learners wherever they are, while still cultivating a strong sense of community and connection.
                    Our dedicated educators are not only academically qualified, but also ethically grounded, committed to walking alongside each child in their unique journey of learning.
                    As you explore our school, we pray you’ll see a place where your child can grow in wisdom and stature. We invite you to partner with us in this task of education—where learning leads to transformation.</p>
            </div>
            <div class="col-lg-4">
                <?php
                include ('web/about-links.php')
                ?>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>