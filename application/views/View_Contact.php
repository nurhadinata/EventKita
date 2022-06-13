<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/logo2.png" type="image/x-icon">
    <title>Contact Us</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSContact.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSLandingPage.css">
</head>
<body>
    <header>
        <a href="<?php echo base_url();?>" class="logo">EventKita<span>.</span></a>
        <ul class="navigation">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li><a href="<?php echo base_url("eventkita/event");?>">Event</a></li>
            <li><a href="<?php echo base_url("eventkita/contact");?>">Contact Us</a></li>
            <li><a href="<?php echo base_url("eventkita/login");?>" class="login">Login</a></li>
            <li><a href="<?php echo base_url("eventkita/register");?>" class="register">Sign Up</a></li>
        </ul>
    </header>

    <section>
        <div class="img-bx">
            <img src="<?php echo base_url();?>asset/exhibition.jpg" alt="concert1">
        </div>
        <div class="content-bx">
            <div class="form-bx">
                <h2>Contact Us<span>.</span></h2>
                <form action="<?php echo base_url("eventkita/contact_process");?>" method="POST">
                    <div class="input-bx">
                        <span>Nama</span>
                        <input type="text" name="nama">
                    </div>
                    <div class="input-bx">
                        <span>Email</span>
                        <input type="email" name="email">
                    </div>
                    <div class="input-bx">
                        <span>Pesan</span>
                        <input type="textarea" name="pesan">
                    </div>
                    <div class="input-bx">
                        <input type="submit" value="Send" name="">
                    </div>
                </form>
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