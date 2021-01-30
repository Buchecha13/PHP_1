<?php
include_once 'classSimpleImage.php';
if (!empty(scandir('gallery_img/small/'))) {
    $images = scandir('gallery_img/small/');
    $images = array_splice($images, 2);
}

$status = [
    'ok' => 'Файл загружен',
    'typeErr' => 'Неверный формат файла',
    'sizeErr' => 'Максимальный размер файла - 5 Мб'
];
$allowed_types = [
    'image/jpg',
    'image/jpeg',
    'image/png',
];
$path = 'gallery_img/big/' . $_FILES['uploadedImage']['name'];

if (!empty($_FILES)) {
    if (!in_array($_FILES['uploadedImage']['type'], $allowed_types)) {
        header("Location: mygallery.php?status=typeErr");
    } elseif ($_FILES['uploadedImage']['size'] > 1024 * 1024 * 5) {
        header("Location: mygallery.php?status=sizeErr");
    } elseif (move_uploaded_file($_FILES['uploadedImage']['tmp_name'], $path)) {

        $image = new SimpleImage();
        $image->load($path);
        $image->resizeToWidth(250);
        $image->save('gallery_img/small/' . $_FILES['uploadedImage']['name']);
        header("Location: mygallery.php?status=ok");
    }
}

$currentStatus = $status[$_GET['status']]
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen"/>
    <script type="text/javascript">
        $(document).ready(function () {
            $("a.photo").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                speedIn: 500,
                speedOut: 500,
                hideOnOverlayClick: false,
                titlePosition: 'over'
            });
        });
    </script>
</head>

<body>
<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?php foreach ($images as $image): ?>
            <a rel="gallery" class="photo" href="gallery_img/big/<?= $image ?>"><img alt="img-1" src="gallery_img/small/<?= $image ?>" width="150" height="100"/></a>
        <?php endforeach; ?>
    </div>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="uploadedImage">
        <input type="submit" value="Загрузить">
    </form>
    <p><?= $currentStatus ?></p>
</div>

</body>

