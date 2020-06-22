<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>For You Lia Yusita, From Me Eko Siswoyo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Off Canvas Menu -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Color Switcher -->
    <link rel="stylesheet" type="text/css" href="assets/css/vegas.min.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <script
src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  </head>
  <body>

    <div class="bg-wraper overlay has-vignette">
      <div id="example" class="slider opacity-50 vegas-container" style="height: 983px;"></div>
    </div>

    <!-- Coundown Section Start -->
    <section class="countdown-timer">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-xs-12 text-center">
            <div class="heading-count">
            <?php

              date_default_timezone_set("Asia/Jakarta");

              $b = time();
              $hour = date("G",$b);

              if ($hour>=0 && $hour<=11)
              {
              echo "<h3 style='color:#EC268F;'>SELAMAT PAGI SAYANGKU :)</h3>";
              echo "<p style='color:#EC268F;'>Semoga diberi kelancaran pekerjaan nya ya, Semangat kerja sayang.</p>";
              }
              elseif ($hour >=12 && $hour<=14)
              {
                echo "<h3 style='color:#EC268F;'>SELAMAT SIANG SAYANGKU :)</h3>";
                echo "<p style='color:#EC268F;'>Jangan lupa makan dan salatnya ya sayang.</p>";
              }
              elseif ($hour >=15 && $hour<=17)
              {
                echo "<h3 style='color:#EC268F;'>SELAMAT SORE SAYANGKU :)</h3>";
                echo "<p style='color:#EC268F;'>Alhamdulilah udah sore, semoga bisa pulang tepat waktu ya. :)</p>";
              }
              elseif ($hour >=17 && $hour<=18)
              {
                echo "<h3 style='color:#EC268F;'>SELAMAT PETANG SAYANGKU :)</h3>";
                echo "<p style='color:#EC268F;'>Selamat beristirahat kalau sudah dirumah, dan semoga cepat bisa pulang kalau masih di kantor.</p>";
              }
              elseif ($hour >=19 && $hour<=23)
              {
                echo "<h3 style='color:#EC268F;'>SELAMAT MALAM SAYANGKU :)</h3>";
                echo "<p style='color:#EC268F;'>Selamat beristirahat sayang, selaamt tidur semoga mimpi indah sayang. Jangan lupa mimpiin aku ya :)</p>";
              }

              ?>
              <!-- <h2>WE ARE COMING SOON</h2>
             
              
              <p class="text-light">Our exciting new website is coming soon! Check back later...</p> -->
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="row time-countdown line-right justify-content-center">
            <h2 id="timestamp" style="color:#EC268F;"></h2>
            </div>
            <div class="subscribe-form text-center">
<!--              
              <form class="form-inline">
                <input name="email" class="form-control btn-rounded" placeholder="Email Address" type="email">  -->
                <a href="https://wa.me/6285712386283"><button class="btn btn-common btn-round" type="submit">CHAT KEKASIH</button></a>
              <!-- </form> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Coundown Section End -->

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/vegas.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>

    <script type="text/javascript">
      $("#example").vegas({
          timer: false,
          delay: 6000,
          transitionDuration: 2000,
          transition: "blur",
          slides: [
              { src: "assets/img/slide1.jpg" }
          ]
      });
    </script>

<script>
// Function ini dijalankan ketika Halaman ini dibuka pada browser
$(function(){
setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});
 
//Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
function timestamp() {
$.ajax({
url: 'ajax_timestamp.php',
success: function(data) {
$('#timestamp').html(data);
},
});
}
</script>
      
  </body>
</html>
