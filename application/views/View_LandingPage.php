<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/logo2.png" type="image/x-icon">
    <title>Event Kita</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url();?>/css/View_CSSLandingPage.css">
</head>
<body>
    <header>
        <a href="<?php base_url();?>" class="logo">EventKita<span>.</span></a>
        <ul class="navigation">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url('eventkita/event');?>">Event</a></li>
            <li><a href="<?php echo base_url('eventkita/contact');?>">Contact Us</a></li>
            <li><a href="<?php echo base_url('eventkita/login');?>" class="login">Login</a></li>
            <li><a href="<?php echo base_url('eventkita/register');?>" class="register">Sign Up</a></li>
        </ul>
    </header>

    <section class="banner">
        <img src="<?php echo base_url();?>asset/concert3.jpg" alt="konser" class="fitbg">
        <div class="content">
            <h2>Find Your Event</h2>
            <p>Temukan banyak event menarik yang secara lengkap tersedia dan di update setiap harinya. Mulai dari konser musik, 
                pameran seni, webinar, olahraga, dan masih banyak lagi. Explore sekarang juga !
            </p>
        </div>
    </section>

    <h2 class="tittle1">AppFeatures<span>.</span></h2>
    <section class="fitur">
        <div class="container">
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="<?php echo base_url();?>svg/hand.png" alt="money">
                        <h3>Self Transaction</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Keamanan dalam bertransaksi menjadi prioritas utama kami dalam meningkatkan kenyamanan pengguna</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="<?php echo base_url();?>svg/check-mark.png" alt="complete">
                        <h3>Complete</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Banyak event-event menarik dan lengkap yang bisa anda ikuti, Mulai dari konser musik, pameran seni, webinar, dan olahraga</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="face face1">
                    <div class="content">
                        <img src="<?php echo base_url();?>svg/browser.png" alt="update">
                        <h3>Up to Date</h3>
                    </div>
                </div>
                <div class="face face2">
                    <div class="content">
                        <p>Event-event yang tersedia selalu kami update setiap harinya untuk menginformasikan pada pengguna</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <h2 class="tittle2">EventCategory<span>.</span></h2>
    <section class="kategori">
        <div class="container">
            <div class="card">
                <div class="imgbx">
                    <img src="<?php echo base_url();?>asset/bp.jpg" alt="">
                </div>
                <div class="content">
                    <div>
                        <h2>Concert</h2>
                        <p>Dengan satu aplikasi kamu dapat menemukan tiket konser dari berbagai bintang secara lengkap</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="<?php echo base_url();?>asset/exhibition.jpg" alt="">
                </div>
                <div class="content">
                    <div>
                        <h2>Exhibition</h2>
                        <p>Berbagai event pamerna seni dari berbagai daerh yang dapat ada kunjungi</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="<?php echo base_url();?>asset/webinar.jpg" alt="">
                </div>
                <div class="content">
                    <div>
                        <h2>Conference & Workshop</h2>
                        <p>Terdapat berbagai konferensi dan workshop yang diadakan secara virtual dapat anda ikuti bagi anda yang malas keluar rumah</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="<?php echo base_url();?>asset/drama.jpg" alt="">
                </div>
                <div class="content">
                    <div>
                        <h2>Theater</h2>
                        <p>Berbagai event teater dengan berbagai jenis dari musikal, kolosal, dan masih banyak lagi dapat adna temukan disini</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <h3>EventKita<span>.</span></h3>
            <p>Website pembelian tiket event terlengkap dan terpercaya.</p>
            <ul class="social">
                <li><a href=""><i class='bx bxl-facebook-square' ></i></a></li>
                <li><a href=""><i class='bx bxl-twitter' ></i></a></li>
                <li><a href=""><i class='bx bxl-instagram' ></i></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2020 EventKita Corporation. designed by <span>Orang Dalam</span></p>
        </div>
    </footer>

    <script type="text/javascript">
        window.addEventListener('scroll', function(){
          const header = document.querySelector('header');
          header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>
</html>