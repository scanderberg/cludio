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

if (@$_POST['date']) {
$date = "Дата: " . @$_POST['date'] . "\r\n";
}
else {
$date = "";
}



mail("scanderberg478@gmail.com", "Бронирование бильярдного стола", $name . $email . $date . "Телефон: " . @$_POST['phone'],
 "From: Бильярдный клуб <order@billiard.cludo.ru>");

mail($_POST['email'], "Ваша заявка принята", "Наш менеджер свяжется с Вами в самое ближайшее время, чтобя уточнить детали.
\n
Это автоматическое сообщение, на него не нужно отвечать.",
 "From: Бильярдный клуб <order@billiard.cludo.ru>");

}

?>