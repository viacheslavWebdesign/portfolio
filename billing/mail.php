<?php

$recepient = "partners@billing.media";
$sitename = "billing.media";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$message = "Ім'я: $name \n Email: $email \n Телефон: $phone \n Завдання: $text";

$pagetitle = "Нова заявка з сайту \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");