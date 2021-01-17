<?php
#Начало задания №4
$title = "Информация обо мне";
$year = "2018";

$inputParams = ['{{ title }}', '{{ year }}'];
$params = [$title, $year];

$text = file_get_contents("site.html");

$text = str_replace($inputParams, $params, $text);

echo $text;

