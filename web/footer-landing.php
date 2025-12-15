 <footer class="footer bg-dark">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-sm-6">
                 <div class="footer-widget about-footer">
                     <div class="f-logo">
                         <div class=" text-info rounded-3 ">
                             <h3 style="color:#fff;">Contact Now</h3>
                         </div>
                     </div>
                     <a href="tel:+9034252500" class="display-4 cta-link text-secondary txt-white">90342 52500</a>
                     <div class="social-share-alt text-mute mt-4">
                         <a href="https://www.facebook.com/schoolofexcellencepanipat"><img class="footer-iconn" src="images/icons/fb-w.png" alt=""></a>
                         <a href="https://www.instagram.com/schoolofexcellencepanipat2025/"><img class="footer-iconn" src="images/icons/ins-w.png" alt=""></a>
                     </div>
                 </div>
             </div>
             <!--  Widget End -->
             <div class="col-lg-2 offset-lg-1 col-sm-6">
                 <div class="footer-widget">
                     <div class=" text-info rounded-3 ">
                         <h3 style="color:#fff;">More Info</h3>
                     </div>
                     <ul class="mt-4">
                         <li><a href="history.php">About School</a></li>
                         <li><a href="gps-app.php">Download GPS APP</a></li>
                         <li><a href="#" data-toggle="modal" data-target="#exampleModal">Make A Query</a></li>
                         <li><a href="https://play.google.com/store/apps/details?id=com.magnus.soe&hl=en_IN">Download Mobile APP</a></li>

                     </ul>
                 </div>
             </div>
             <!--  Widget End -->
             <div class="col-lg-2 col-sm-6">
                 <div class="footer-widget">
                     <div class=" text-info rounded-3 ">
                         <h3 style="color:#fff;">Reach us</h3>
                     </div>
                     <ul class="mt-4">
                         <li class="d-flex align-items-center">
                             <span><i class="feather-icon icon-mail"></i></span>
                             <a href="mailto:soepanipat@gmail.com">soepanipat@gmail.com</span></a>
                         </li>
                         <li class="d-flex align-items-center">
                             <span><i class="feather-icon icon-map-pin"></i></span>
                             Sector-18, Huda, Panipat
                         </li>

                     </ul>
                 </div>
             </div>
             <!--  Widget End -->
             <div class="col-lg-4 ps-xxl-5 col-sm-6">
                 <div class="footer-widget post-widget">
                     <div class=" text-info rounded-3 ">
                         <h3 style="color:#fff;">Locate us</h3>
                     </div>

                     <div class="recent-posts mt-4">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3474.63853390945!2d76.9791434!3d29.4393593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390dd93d2a0bbc13%3A0xce8914b4202f057d!2sSchool%20of%20Excellence!5e0!3m2!1sen!2sin!4v1765257415660!5m2!1sen!2sin" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                 </div>
             </div>
             <!--  Widget End -->
         </div>
         <div class="row footer-bottom">
             <div class="col-lg-6 col-sm-6 order-2 order-sm-1">
                 <p class="m-0 text-mute">© 2025 Design by <a class="text-secondary" href="tel:918950366489">IT Department</a>. All Rights Reserved.</p>
             </div>
             <div class="col-lg-6 col-sm-6 order-1 order-sm-2">
                 <div class="social-share-alt text-lg-end text-mute">
                     <!-- <a href="#"><img src="images/icons/fb-w.png" alt="" /></a>
                     <a href="#"><img src="images/icons/tw-w.png" alt="" /></a>
                     <a href="#"><img src="images/icons/ins-w.png" alt="" /></a>
                     <a href="#"><img src="images/icons/linkedin-w.png" alt="" /></a> -->
                 </div>
             </div>
         </div>
     </div>
 </footer>

 <style>
     .footer-icon1 {
         position: fixed;
         bottom: 40px;
         /* distance from bottom */
         right: 20px;
         /* distance from right */
         display: flex;
         flex-direction: column;
         gap: 10px;
         /* spacing between items */
         z-index: 9999;
         /* keeps it on top */
         text-align: center;
     }

     .footer-icon1 a div {
         background: #dc3545;
         /* red background */
         color: #fff;
         /* white text */
         padding: 8px 12px;
         border-radius: 6px;
         font-size: 14px;
         font-weight: 500;
         transition: 0.3s;
     }

     .footer-icon1 a div:hover {
         background: #b52a34;
     }

     .footer-icon1 img {
         width: 50px;
         height: 50px;
         border-radius: 50%;
         cursor: pointer;
     }



     /* Footer Styles */
     .mobile-footer {
         display: none;
         position: fixed;
         bottom: 0;
         left: 0;
         width: 100%;
         background: linear-gradient(to right, #f8f9fa, #e9ecef);
         padding: 15px 0;
         box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
         z-index: 1000;
         border-top-left-radius: 20px;
         border-top-right-radius: 20px;
     }

     /* Show only on mobile (max 768px) */
     @media only screen and (max-width: 768px) {
         .mobile-footer {
             display: block;
         }
     }

     .footer-icons {
         display: flex;
         justify-content: space-around;
         align-items: center;
     }

     .footer-item {
         display: flex;
         flex-direction: column;
         align-items: center;
         text-decoration: none;
         color: #495057;
         transition: all 0.3s ease;
         flex: 1;
     }

     .footer-item:hover {
         transform: translateY(-5px);
         color: #007bff;
     }

     .footer-icon {
         font-size: 22px;
         margin-bottom: 5px;
         background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
         -webkit-background-clip: text;
         -webkit-text-fill-color: transparent;
         transition: all 0.3s ease;
         padding: 10px;
         border-radius: 50%;
         background-color: rgba(255, 255, 255, 0.9);
         box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
         width: 50px;
         height: 50px;
         display: flex;
         align-items: center;
         justify-content: center;
     }

     .footer-item:hover .footer-icon {
         transform: scale(1.2) rotate(5deg);
         box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
     }

     .footer-label {
         font-size: 12px;
         font-weight: 500;
         margin-top: 5px;
     }

     /* Show footer only on mobile */
     @media (max-width: 768px) {


         .desktop-message {
             display: none;
         }
     }

     /* Demo content */
     .content {
         margin-bottom: 80px;
     }

     .notification {
         background: rgba(255, 255, 255, 0.15);
         padding: 15px;
         border-radius: 12px;
         margin: 15px 0;
     }

     /* Instructions */
     .instructions {
         background: rgba(255, 255, 255, 0.2);
         padding: 20px;
         border-radius: 15px;
         margin-top: 30px;
     }

     .instructions h2 {
         margin-bottom: 10px;
         font-size: 1.4rem;
     }

     .instructions ul {
         padding-left: 20px;
     }

     .instructions li {
         margin-bottom: 8px;
     }

     /* Desktop message */
     .desktop-message {
         text-align: center;
         padding: 20px;
         background: rgba(255, 255, 255, 0.2);
         border-radius: 15px;
         margin-top: 30px;
     }

     /* Version badge */
     .version-badge {
         position: absolute;
         top: 15px;
         right: 15px;
         background: white;
         color: #6a11cb;
         padding: 5px 10px;
         border-radius: 20px;
         font-size: 12px;
         font-weight: bold;
     }

     .pay-online {
         position: fixed;
         bottom: 15px;
         right: 20px;
         z-index: 99;
         cursor: pointer;
         border-width: initial;
         border-style: none;
         border-color: initial;
         border-image: initial;
         outline: none;
     }

     .whatsapp {
         position: fixed;
         bottom: 15px;
         left: 20px;
         z-index: 99;
         cursor: pointer;
         border-width: initial;
         border-style: none;
         border-color: initial;
         border-image: initial;
         outline: none;
     }
 </style>
 <footer class="mobile-footer">
     <div class="footer-icons">
         <a href="tel:9034252500" class="footer-item">
             <div class="footer-icon">
                 <i class="fa-solid fa-phone"></i>
             </div>
             <span class="footer-label">Call us</span>
         </a>

         <a href="#" data-toggle="modal" data-target="#exampleModalLabelwhatsapp" class="footer-item">
             <div class="footer-icon">
                 <i class="fa-brands fa-whatsapp"></i>
             </div>
             <span class="footer-label">Inquiry</span>
         </a>
         <a href="mailto:soepanipat" class="footer-item">
             <span class="badge-lg bg-primary rounded-5 bounce">No Admission Fee</span>
             <span class="footer-label">Mail us</span>
         </a>
     </div>
 </footer>
 <div class="pay-online">
     <a href="https://curtina.in/soe/forms/frmstdPayOnline.aspx" target="_blank"><img onclick="topFunction()" id="btnGoToTop" src="images/ss.png" alt=""></a>
 </div>

 <div class="whatsapp">
     <a href="#" data-toggle="modal" data-target="#exampleModalLabelwhatsapp""><img onclick=" topFunction()" id="btnGoToTop" src="/images/whats.png" alt=""></a>
 </div>
 <script>
     // Simple animation for icons when page loads
     document.addEventListener('DOMContentLoaded', function() {
         const icons = document.querySelectorAll('.footer-icon');
         icons.forEach((icon, index) => {
             setTimeout(() => {
                 icon.style.opacity = '1';
                 icon.style.transform = 'scale(1.1)';
                 setTimeout(() => {
                     icon.style.transform = 'scale(1)';
                 }, 200);
             }, index * 100);
         });
     });
 </script>

 <script>
     // Simple animation for icons when page loads
     document.addEventListener('DOMContentLoaded', function() {
         const icons = document.querySelectorAll('.footer-icon');
         icons.forEach((icon, index) => {
             setTimeout(() => {
                 icon.style.opacity = '1';
                 icon.style.transform = 'scale(1.1)';
                 setTimeout(() => {
                     icon.style.transform = 'scale(1)';
                 }, 200);
             }, index * 100);
         });
     });
 </script>
 <!-- Footer Section End -->
 </div>
 <!-- Scroll Top -->
 <!-- <div class="scroll-top">
     <svg class="progress-circle svg-content" height="100%" viewBox="-1 -1 102 102" width="100%">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
             fill="none" stroke="black" stroke-width="2">
         </path>
     </svg>
 </div> -->
 <!--Javascript
========================================================-->
 <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="js/swiper-bundle.min.js"></script>
 <script src="js/nice-select2.js"></script>
 <script src="js/glightbox.min.js"></script>
 <script src="js/isotope.pkgd.min.js"></script>
 <script src="js/purecounter_vanilla.js"></script>
 <script src="js/lenis.min.js"></script>
 <script src="js/custom.js"></script>
 <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"94a775a3bdd1e1a4","version":"2025.5.0","r":1,"token":"389fa74406c44f21b129709ce8a3ec16","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}}}' crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 </body>

 </html>