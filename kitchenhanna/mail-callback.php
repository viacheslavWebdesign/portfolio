<?php

$recepient = "example@mail.com";
$sitename = "Анна Кухни";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$kitchen = trim($_POST["kitchen"]);
$message = "Имя: $name \n Номер телефона: $phone \n Кухня из каталога: $kitchen";

$pagetitle = "Запрос звонка \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");