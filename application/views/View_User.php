<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSUser.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <a href="<?php echo base_url();?>" class="logo">EventKita <span>.</span></a>
        <ul class="navigation">
            <li><a href="<?php echo base_url('eventkita/home');?>">Back <i class='bx bx-arrow-back bx-rotate-180' ></i></a></li>
        </ul>
    </header>

    <div class="aside">
        <div>
            <!--Logo-->
            <div class="logo">
                <a href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($user[0]->foto_user).'"/>';?></a>
            </div>
            <!--Nav Toggler-->
            <div class="nav-toggler">
               <span><i class='bx bx-menu'></i></span>
            </div>
            <!--navbar-->
            <ul class="nav">
                <li class="nav_items"><a href="#Home" class="active"><i class='bx bx-user-circle'></i> Profile</a></li>
                <li class="nav_items"><a href="#About" class="nav_link"><i class='bx bx-wrench'></i> Setting</a></li>
            </ul>
        </div>
        <!--Aside End-->
        <!--Main Content-->
        <div class="main-content">
            <!--Home Section-->
        </div>

    <script type="text/javascript">
        window.addEventListener('scroll', function(){
          const header = document.querySelector('header');
          header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
</body>
</html>