<?php
define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');

echo render('index', ['name' => 'Ivan']);


function render($page, $params = []) {
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}


function renderTemplate($page, $params = [])
{
    ob_start();
//    foreach ($params as $key => $value) {
//        $$key = $value;
//    }
    extract($params);
    $fileName = TEMPLATES_DIR . $page . ".php";
    if (file_exists($fileName)) {
        include $fileName;
    }
    return ob_get_clean();
}