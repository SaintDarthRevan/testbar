<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.05.2019
 * Time: 3:04
 *
 * Тест со случайно-генерируемыми данными
 */

use \Place\Bar;

include '../index.php';

$visitorsCount = 20;

$bar = new Bar();

// Рандомно генерируем посетителей
$bar->addVisitors(\Tests\RandomVisitors::generate($visitorsCount));

// Кто-то из посетителей заказывает музыку
$visitorNum = rand(0, $visitorsCount-1);
$visitor = $bar->getVisitorByNum($visitorNum);
$favGenres = $visitor->getFavGenres();
$genreNum = rand(0, count($favGenres)-1);
$genreId = $favGenres[$genreNum];

// Случайно выбираем жанр из тех, что нравятся посетителю
// Предполагается, что в реальных условиях мы бы передавали кокретный жанр, который он заказал
// Для теста же выбираем рандомно
$visitor->setBehavior('OrderMusic', ['genreId' => $genreId]);
echo $visitor->whatDo() . "<br /> === <br />";
$bar->changeMusicByOrder();
echo "\r\n";
// Выводим на экран отчет о том, что сейчас происходит в баре
echo nl2br($bar->getReport());