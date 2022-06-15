<?php

$recepient = "example@mail.com";
$sitename = "Kingston Fury";

$name = trim($_POST["name"]);
$city = trim($_POST["city"]);
$info = trim($_POST["info"]);
$contact = trim($_POST["contact"]);
$message = "Имя: $name \n Город: $city \n Откуда узнал о конкурсе: $info \n Связь: $contact";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");