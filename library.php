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
                <h1 class="display-2 text-white">Library</h1>
            </div>
        </div>
    </div>
</section>
<section class="single-post sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card-media position-relative">
                    <a href="#"><img class="card-img-top" src="images/labs/library.jpg" alt="Couarse"></a>
                </div>
                <p class="line-heigth pt-4">At School of Excellence, our library is the heart of knowledge, curiosity, and lifelong learning. Designed to support the academic and intellectual growth of students, the library offers a peaceful and inspiring environment where learners can explore, research, and discover new ideas.

                    Our library houses a rich and diverse collection of resources, including storybooks, reference books, encyclopedias, academic journals, biographies, newspapers, magazines, and digital learning materials. From young readers to senior students, every learner finds books that spark interest, imagination, and critical thinking.
                </p>
                <div class="d-flex justify-content-center gap-4">
                    <div class="card-media position-relative">
                        <a href="#"><img class="card-img-top" src="images/labs/library2.jpg" alt="Course"></a>
                    </div>
                    <div class="card-media position-relative">
                        <a href="#"><img class="card-img-top" src="images/labs/sports2.jpg" alt="Course"></a>
                    </div>
                </div>
                <p class="line-heigth pt-4">The library is equipped with comfortable seating, proper lighting, and a structured cataloging system for easy access to information. Guided by a supportive librarian, students are encouraged to develop good reading habits, independent study skills, and a deep appreciation for literature.
                </p>
                <p class="line-heigth">At School of Excellence, we believe that reading builds confidence, broadens perspectives, strengthens vocabulary, and enhances academic performance. Through regular library periods, book fairs, reading challenges, and storytelling sessions, we aim to cultivate a culture where knowledge becomes a passion and reading becomes a joy.</p>
            </div>
            <div class="col-lg-4">
                <?php include('web/infra-links.php'); ?>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>