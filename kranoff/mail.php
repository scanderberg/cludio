<?php

if (@$_POST['phone']) {

if (@$_POST['name']) {
$name = "Имя: " . @$_POST['name'] . "\r\n";
}
else {
$name = "";
}

if (@$_POST['email']) {
$email = "Email: " . @$_POST['email'] . "\r\n";
}
else {
$email = "";
}

if (@$_POST['city']) {
$city = "Город: " . @$_POST['city'] . "\r\n";
}
else {
$city = "";
}

if (@$_POST['comment']) {
$comment = "Комментарий: " . @$_POST['comment'] . "\r\n";
}
else {
$comment = "";
}



mail("scanderberg478@gmail.com", "Новая заявка на моноколёса и гироскутеры", $name . $email . $city . $comment . "Телефон: " . @$_POST['phone'],
 "From: Моноколёса и гироскутеры <order@99wheel.cludo.ru>");
}

?>