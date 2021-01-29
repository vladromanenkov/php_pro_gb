<?php

require 'DB.php';
require 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader);

$limit = 5;

if (isset($_GET['from'])) {
    $count = DB::getInstance()->getCount(DB::TABLE); //сколько товаров
    $loaded = $_GET['from'] + $limit; //сколько товаров загружено в данный момент
    $all = $loaded >= $count;

    $goods = DB::getInstance()->getLimit(DB::TABLE, $_GET['from'], $limit);
    echo $twig->render('goods.twig', [
        'goods' => $goods,
        'all' => $all,
    ]);
    exit;
}

$goods = DB::getInstance()->getAllData(DB::TABLE);

echo $twig->render('index.twig', [
    'goods' => $goods,
    'limit' => $limit,
]);
