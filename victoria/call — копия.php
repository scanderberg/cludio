<?php

if (@$_POST['tel']) {

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ваш заказ принят!</title>
    <meta name="description" content="Стильный дизайнерский пояс Victoria Lux с золотым или серебряным напылением от Victoria Beckham"/>
    <meta name="keywords" content="пояс Victoria Lux, золотой 24К Victoria Lux, серебряный пояс Victoria Lux Silver, купить пояс Victoria Lux">
    <meta name="viewport" content="width=device-width">
    <link rel="icon" type="http://victoria-lux.cludo.ru/" href="favicon.ico">

<style>

body{
    background-color: #eeeeee; 
    color:#313E47;
    font-family:Arial;
    font-size:15px;
    height:100%;
    line-height:1;
    width:100%;
    overflow-x: hidden;
    }

div.order{
margin-top: 8%;
    }

    html{height:100%}ol,ul{list-style:none outside none}h2{color:#313E47;font-size:36px;font-weight:700;line-height:44px;text-align:center;text-transform:uppercase}h3{font-size:18px;font-weight:700;text-align:center;margin:20px 0}a{color:#69B9FF}.order_number{color:#424242;font-family:Arial;font-size:30px;line-height:38px;text-align:center;text-transform:uppercase;margin:25px 0}.url_more_info{display:block;font-size:20px;text-align:center;margin:20px 0}.block_success{max-width:960px;margin:0 auto;padding:0 30px}.list_info{display:inline-block;text-align:left}.list_info li{margin:11px 0}.list_info li span{display:inline-block;font-style:normal;font-weight:700;width:150px}.fail{text-align:center;margin:25px 0 50px}.email{margin-top:40px;position:relative;text-align:center}.error{color:#CA3F3F;display:none;position:absolute;top:-28px}.mail_block{display:inline-block}.email input{border:1px solid #B6B6B6;border-radius:5px;font-size:14px;height:30px;margin-bottom:10px;outline:medium none;padding-left:10px;padding-right:10px;width:200px}.button{background:0 repeat scroll 0 0 rgba(0,0,0,0);border:1px solid #0076A3;border-radius:.5em;box-shadow:0 1px 2px rgba(0,0,0,0.2);color:#D9EEF7;cursor:pointer;display:inline-block;font:15px/100% Arial,Helvetica,sans-serif;outline:medium none;text-align:center;text-decoration:none;text-shadow:0 1px 1px rgba(0,0,0,0.3);padding:.55em 2em .6em}.button:hover{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#D9EEF7;text-decoration:none}.button:active{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6;position:relative;top:1px}.disabled{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6}.disabled:hover{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6;cursor:default}.disabled:active{top:0}.mail_s{color:green;position:inherit;top:0}a:hover,.order_number span,.url_more_info:hover{color:#E14740}.success,.wrap_list_info{text-align:center}

@media only screen and (max-width: 1200px) {




}



@media only screen and (max-width: 750px) {

h2 {
font-size: 25px!important;

}

h1 {
font-size: 20px!important;

}



}

@media only screen and (max-width: 500px) {

h2 {
font-size: 20px!important;

}

h1 {
font-size: 15px!important;

}



}




</style>

</head>
<body>
<div class="order" align="center">
<br/><center><img align='center' src='img/shopping_cart_light_blue.png' height="200px"></center><div class='wrap_block_success'><div class='block_success'><h2>Поздравляем! Ваш заказ принят!</h2><p class='success'>В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.</p><h1 style='color:#FF0000; text-align: center;' >Спасибо что выбрали нас!</h1></div>
</div>
</body>
</html>

<?php

if (@$_POST['name']) {
$name = "Имя: " . @$_POST['name'] . "\r\n";
}
else {
$name = "";
}


mail("scanderberg478@gmail.com", "Новая заявка на дизайнерский пояс", $name . "Телефон: " . @$_POST['tel'],
 "From: VICTORIA LUX <http://victoria-lux.cludo.ru>");
}

?>
