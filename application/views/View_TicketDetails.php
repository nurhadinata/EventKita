<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url();?>asset/logo2.png" type="image/x-icon">
    <title>Details</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSTicketDetails.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <div class="product-img">
        <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($events[0]->poster).'"/>';?>
        </div>
        <div class="product-info">
        <a href="<?php echo base_url("eventkita/event");?>"><i class='bx bx-arrow-back'></i> Back</i></a>
        <div class="product-text">
            <h1><?php echo $events[0]->nama_event ?></h1>
            <h2><?php echo $events[0]->lokasi ?></h2>
            <p><?php echo $events[0]->detail_event ?></p>
            <h3>Price</h3>
            <p class="price"><?php if($events[0]->harga_tiket!=0){echo "IDR ".$events[0]->harga_tiket;} else{echo "FREE";}?></p>
        </div>
        <div class="product-price-btn">
            <?php $event = $events[0] ?>
            <button type="button" onclick="window.location.href='<?php echo base_url("eventkita/event_buy/$event->id_event");?>'">Buy Now</button>
        </div>
        </div>
    </div>
</body>
</html>