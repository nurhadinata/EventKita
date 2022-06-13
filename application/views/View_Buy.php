<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/logo2.png" type="image/x-icon">
    <title>Payment Order</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSBuy.css">
   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <ul class="navigation">
            <?php $event=$events[0]; ?>
            <a href="<?php echo base_url("eventkita/event_detail/$event->id_event");?>"><i class='bx bx-arrow-back' ></i> </a>
        </ul>
    </header>

    <div class="wrapper">
        <div class="img-bx">
            <img src="<?php echo base_url();?>asset/webinar.jpg" alt="Concert">
        </div>
        <div class="content-bx">
            <div class="form-bx">
            <h2>Payment Order<span>.</span></h2>
                <form action="<?php echo base_url("eventkita/transaction_process/$event->id_event");?>" method="POST">
                    <div class="input-bx">
                        <span>Nama Lengkap</span>
                        <input type="text" name="nama">
                    </div>
                    <div class="input-bx">
                        <span>No Handphone</span>
                        <input type="text" name="no_telp">
                    </div>
                    <div class="quantity">
                        <label for="">Jumlah </label>
                        <input type="number" class="qty-input" name="jumlah_tiket" min="1" max="10000">
                        <input type="hidden" name="harga" value="<?php echo $event->harga_tiket ?>">
                    </div>
                    <div class="input-bx">
                        <input type="submit" value="Continue" name="">
                    </div>
                </form>
            </div>
        </div>
    </div>  
</body>
</html>