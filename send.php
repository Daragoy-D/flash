<?php

$order_text = "";	
			
$name = $_POST['name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$new_post = $_POST['new_post'];
$size = $_POST['size'];
$color = $_POST['color'];
$gravi = $_POST['gravi'];
$comments = $_POST['comments'];
$keys = $_POST['keys'];



$from = "Crystalflash.com.ua";
$mail = "crystal.usb.flash@gmail.com";
$subject = "Flash-lead";
$order_text = "Имя : ".$name."\n"
			 ."Телефон : ".$phone."\n"
			 ."Город : ".$city."\n"
			 ."Новая Почта: ".$new_post."\n"
			 ."Цвет: ".$color."\n"
			 ."Объем: ".$size."\n"
			 ."Гравировка: ".$gravi."\n"
			 ."Комментарий: ".$comments."\n"
			 ."Подарочный кейс: ".$keys."\n";

mail($mail, $subject, $order_text, $from);



echo $order_numb;
?>

