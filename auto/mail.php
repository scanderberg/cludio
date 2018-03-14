<?php

if (@$_POST['tel']) {

if (@$_POST['name']) {
$name = "Имя: " . @$_POST['name'] . "\r\n";
}
else {
$name = "";
}

if (@$_POST['marka']) {
$marka = "Марка авто: " . @$_POST['marka'] . "\r\n";
}
else {
$marka = "";
}

if (@$_POST['model']) {
$model = "Модель: " . @$_POST['model'] . "\r\n";
}
else {
$model = "";
}

if (@$_POST['problems']) {
$problems = "Описание проблемы: " . @$_POST['problems'] . "\r\n";
}
else {
$problems = "";
}


mail("scanderberg478@gmail.com", "Новая заявка на ремонт авто", $name . $marka . $model . $problems . "Телефон: " . @$_POST['tel'],
 "From: AVTO-V-REMONT <order@avto-v-remont.cludo.ru>");
}

?>