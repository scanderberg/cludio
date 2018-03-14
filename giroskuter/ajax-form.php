<?php

if ($_POST['tel']) {


mail("scanderberg478@gmail.com", $_POST['name'], "Телефон клиента" . $_POST['tel'],
 "From: katmandy@cludo.ru");
}

?>