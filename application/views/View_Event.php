<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/logo2.png" type="image/x-icon">
    <title>Event</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSLandingPage.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSEvent.css">
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

    <section class="gallery">
        <div class="container">
            <div class="row">
                <div class="gallery-filter">
                    <span class="srch-bx">
                        <form action="<?php echo base_url("eventkita/event_search");?>" method="POST">
                            <input type="search" name="search" value="<?php if(isset($search)){echo $search;} ?>">
                            <i class="fa fa-search"></i>
                        </form>
                    </span>
                    <a href="<?php echo base_url("eventkita/event");?>"><span class="filter-item" data-filter="All">HomeAll</span></a>
                    <a href="<?php echo base_url("eventkita/event_by_kategori/1");?>"><span class="filter-item" data-filter="Concert">Concert</span></a>
                    <a href="<?php echo base_url("eventkita/event_by_kategori/2");?>"><span class="filter-item" data-filter="Exhibition">Exhibition</span></a>
                    <a href="<?php echo base_url("eventkita/event_by_kategori/3");?>"><span class="filter-item" data-filter="Theater">Theater</span></a>
                    <a href="<?php echo base_url("eventkita/event_by_kategori/4");?>"><span class="filter-item" data-filter="Workshop">Workshop</span></a>
                </div>
            </div>
            <div class="card-box">
                <?php
                foreach($events as $event){
                ?>
                <div class="card" onclick="window.location.href='<?php echo base_url("eventkita/event_detail/$event->id_event");?>'">
                    <div class="card-image" ><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($event->poster).'">';?></div>
                    <div class="card-text">
                        <span class="date"><?php echo "$event->waktu" ?></span>
                        <h2><?php echo "$event->nama_event"; ?></h2>
                        <p><?php echo "$event->kategori" ?></p>
                        <p><a href="<?php echo base_url("eventkita/event_detail/$event->id_event");?>">Details >> </a></p>
                    </div>
                </div>
                <?php } ?>
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