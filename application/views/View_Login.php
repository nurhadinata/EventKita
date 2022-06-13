<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/logo2.png" type="image/x-icon">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSLoginRegister.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSLandingPage.css">
</head>
<body>
    <header>
        <a href="<?php echo base_url();?>" class="logo">EventKita <span>.</span></a>
        <ul class="navigation">
            <li><a href="<?php echo base_url();?>">Back <i class='bx bx-arrow-back bx-rotate-180' ></i></a></li>
        </ul>
    </header>

    <section>
        <div class="img-bx">
            <img src="<?php echo base_url();?>asset/hore.jpg" alt="Concert">
        </div>
        <div class="content-bx">
            <div class="form-bx">
                <h2>Login<span>.</span></h2>
                <form action="<?php echo base_url("eventkita/login_process");?>" method="POST">
                    <div class="input-bx">
                        <span>Username</span>
                        <input type="text" name="username">
                    </div>
                    <div class="input-bx">
                        <span>Password</span>
                        <input type="password" name="password">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox"> Remember Me</label>
                    </div>
                    <div class="input-bx">
                        <input type="submit" value="Sign In" name="">
                    </div>
                    <div class="input-bx">
                        <p>Dont Have an Account? <a href="<?php echo base_url("eventkita/register");?>"> Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>