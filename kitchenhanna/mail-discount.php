<?php

$recepient = "example@mail.com";
$sitename = "Анна Кухни";

$phone = trim($_POST["phone"]);
$message = "Номер телефона: $phone";

$pagetitle = "Запрос рассрочки \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");