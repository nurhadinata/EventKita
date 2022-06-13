<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Order</title>
    <link rel="stylesheet" href="<?php echo base_url();?>css/View_CSSBuy2.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <ul class="navigation">
            <a href="<?php echo base_url("eventkita/event");?>"><i class='bx bx-arrow-back' ></i></a>
        </ul>
    </header>

    <div class="wrapper">
        <div class="img-bx">
            <img src="<?php echo base_url();?>asset/webinar.jpg" alt="Concert">
        </div>
        <div class="content-bx">
            <div class="form-bx">
                <h2>Payment Order<span>.</span></h2>
                <form>
                    <div class="option">
                        <label for="">Pilih Metode Pembayaran</label>
                        <select name="" id="" class="paket">
                            <option value="">Transfer ATM</option>
                            <option value="">Ovo</option>
                            <option value="">Gopay</option>
                            <option value="">Dana</option>
                        </select>
                    </div>
                    <div class="input-bx">
                        <input type="submit" value="Pay Now" name="" class="pay">
                    </div>
                </form>
            </div>
        </div>
    </div>  

</body>
</html>