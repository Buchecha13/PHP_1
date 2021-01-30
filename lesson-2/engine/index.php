<?php

//TODO соберите страницу о нас с меню

$menu = renderTemplate('menu');
$content = renderTemplate('about');
echo renderTemplate('layout', $menu, $content);

function renderTemplate($page, $menu = "", $content = "") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}