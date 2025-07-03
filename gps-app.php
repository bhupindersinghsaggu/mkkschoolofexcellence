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
                <h1 class="display-2 text-white">Download APP</h1>
            </div>
        </div>
    </div>
</section>
<section class="blog-sec bg-shade sec-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-10 order-1 order-md-2">
                <div class="about-txt">
                    <h2 class="sec-title position-relative pd-50">GPS App For <span class="color">Transport</span></h2>
                    <p class="line-heigth">Please install the GPS app to track the school bus. Use the following credentials to log in:</p>
                    <p class="line-heigth">
                    <h5>User: <span class="pur-color">soe</span></h5>
                    </p>
                    <p class="line-heigth">
                    <h5>Password:<span class="pur-color">123456</span></h5>
                    </p>

                    <p class="line-heigth">
                    <h5>How To <span class="pur-color">Install</span></h5>
                    </p>
                    <div class="img-part">
                        <style>
                            .video-wrapper {
                                position: relative;
                                width: 100%;
                                max-width: 300px;

                            }

                            #videoPlayer {
                                width: 100%;
                                height: auto;
                                display: block;
                            }

                            .play-button {
                                position: absolute;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                                background: rgba(0, 0, 0, 0.6);
                                border: none;
                                border-radius: 50%;
                                width: 60px;
                                height: 60px;
                                color: #fff;
                                font-size: 24px;
                                cursor: pointer;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                z-index: 10;
                            }

                            .play-button.hidden {
                                display: none;
                            }
                        </style>

                        <!-- <div class="video-wrapper">
                            <video id="videoPlayer" width="100%" height="100%" muted loop>
                                <source id="mp4Source" src="transport.mp4" type="video/mp4">
                            </video>
                            <button id="playBtn" class="play-button">▶</button>
                        </div> -->
                    </div>
                    <div class="d-sm-flex align-items-center mt-5">
                        <a href="https://play.google.com/store/search?q=TB%20Track%20-%20Vehicle%20Tracking&c=apps&hl=en_IN" class="btn btn-primary shadow">Download From Playstore</a>
                        <a href="https://apps.apple.com/us/app/tb-track-vehicle-tracking/id1249657981">Download From APP Store</a>
                    </div>
                    <!-- <script>
                        const video = document.getElementById("videoPlayer");
                        const playBtn = document.getElementById("playBtn");

                        playBtn.addEventListener("click", function() {
                            if (video.paused) {
                                video.play();
                                playBtn.classList.add("hidden");
                            }
                        });

                        video.addEventListener("click", function() {
                            if (!video.paused) {
                                video.pause();
                                playBtn.classList.remove("hidden");
                            }
                        });
                    </script> -->
                </div>
            </div>

        </div>
    </div>
</section>
<?php include('web/footer.php'); ?>