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
                <h1 class="display-2 text-white">Sports & Games</h1>
            </div>
        </div>
    </div>
</section>
<section class="single-post sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="card-media position-relative">
                    <a href="#"><img class="card-img-top" src="images/labs/sports.jpg" alt="Course"></a>
                </div>
                <p class="line-heigth pb-4">At School of Excellence, we believe that education is incomplete without physical fitness and recreational activities. As the saying goes, “All work and no play makes Jack a dull boy,” which is why our curriculum gives equal importance to sports, games, and overall well-being. Students participate in a wide range of outdoor sports such as soccer, basketball, volleyball, and more — helping them develop stamina, teamwork, discipline, and a healthy spirit of competition.
                </p>
                <p class="line-heigth">Along with outdoor activities, we also emphasize indoor games that stimulate mental alertness and analytical thinking. Games like table tennis, carrom, chess, puzzles, scrabble, ludo, monopoly, and others help enhance focus, problem-solving skills, and strategic thinking.
                </p>
                <p class="line-heigth">Through both indoor and outdoor sports, School of Excellence ensures that students get the perfect balance of physical fitness, mental strength, enjoyment, and stress relief. We aim to nurture learners who are not only academically strong but also emotionally balanced, energetic, and confident in every aspect of life.</p>
            </div>
            <div class="col-lg-4">
                <?php include('web/infra-links.php'); ?>
            </div>
        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>