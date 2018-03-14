<?php

if (@$_POST['phone']) {

if (@$_POST['name']) {
$name = "Имя: " . @$_POST['name'] . "\r\n";
}
else {
$name = "";
}

if (@$_POST['question']) {
$question = "Город: " . @$_POST['question'] . "\r\n";
}
else {
$question = "";
}




mail("scanderberg478@gmail.com", "Новая заявка на коттеджи", $name . $question . $comment . "Телефон: " . @$_POST['phone'],
 "From: Коттеджный посёлок <order@vitiaz.cludo.ru>");
}




if (@$_POST['email']) {

if (@$_POST['name']) {
$name = "Имя: " . @$_POST['name'] . "\r\n";
}
else {
$name = "";
}

if (@$_POST['question']) {
$question = "Вопрос: " . @$_POST['question'] . "\r\n";
}
else {
$question = "";
}




mail("scanderberg478@gmail.com", "Вопрос по коттеджам", $name . $question . $comment . "Email: " . @$_POST['email'],
 "From: Коттеджный посёлок <order@vitiaz.cludo.ru>");


mail($_POST['email'], "Ваша заявка по коттеджам принята", "Наш менеджер скоро обсудит с Вами все детали.
	\n
Это автоматическое сообщение, на него отвечать не нужно.",
 "From: Коттеджный посёлок <order@vitiaz.cludo.ru>");




}
















?>