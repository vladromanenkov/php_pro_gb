<?php

require 'DB.php';
require 'vendor/autoload.php';

//Проверка подключения
/*DB::getInstance();
echo 'OK';
exit;*/

$images = $img1 = null;

if (!isset($_GET['id'])
    || !($img1 = DB::getInstance()->getById(DB::TABLE, $_GET['id']))
) {
    $images = DB::getInstance()->getAllData(DB::TABLE);
}

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.twig', [
    'images' => $images,
    'img1' => $img1,
]);
