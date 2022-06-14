<?php

$recepient = "example@mail.com";
$sitename = "Анна Кухни";

$phone = trim($_POST["phone"]);
$type = trim($_POST["type"]);
$material = trim($_POST["material"]);
$sizea = trim($_POST["sizea"]);
$sizeb = trim($_POST["sizeb"]);
$sizec = trim($_POST["sizec"]);
$price = trim($_POST["price"]);
$message = "Номер телефона: $phone \n Тип кухни: $type \n Материал: $material \n Сторона А: $sizea \n Сторона B: $sizeb \n Сторона C: $sizec \n Цена: $price";

$pagetitle = "Запрос скидки \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");