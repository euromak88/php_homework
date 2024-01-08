<?php
$title = "Главная страница";
$heading = "Добро пожаловать, гость!";
$current_time = new DateTime('now');
$year = $current_time->format('Y');
$copywright = "Данный официальный сайт несет информационный характер и ни при каких условиях материалы и цены, размещенные на сайте, не являются публичной офертой.";

$data_template = file_get_contents("template/main.php");
$data_template = str_replace("{{title}}", $title, $data_template);
$data_template = str_replace("{{heading}}", $heading, $data_template);
$data_template = str_replace("{{current_time}}", $year, $data_template);

$a = 0;
$b = 2;
$a = $a + $b;
$b = $a - $b;
$a -= $b;


echo $data_template;
include_once "template/footer.php";
