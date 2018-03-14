<?php

if (@$_POST['phone']) {

if (@$_POST['name']) {
$name = "Имя: " . @$_POST['name'] . "\r\n";
}
else {
$name = "";
}


mail("scanderberg478@gmail.com", "Новая заявка на грузоподъёмные работы", $name . "Телефон: " . @$_POST['phone'],
 "From: Башенные краны <order@kranoff.cludo.ru>");
}

?>