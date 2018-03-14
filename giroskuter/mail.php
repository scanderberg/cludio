<?php

if ($_POST['tel']) {

if ($_POST['name']) {
$name = "Имя: " . $_POST['name'] . "\r\n";
}
else {
$name = "";
}



mail("scanderberg478@gmail.com", "Новая заявка на гироскутер", $name . "Телефон: " . $_POST['tel'],
 "From: Гироскутер <order@giroskuter.cludo.ru>");
}

?>$name 