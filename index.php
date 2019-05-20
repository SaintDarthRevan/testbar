<?php
require __DIR__ . '/vendor/autoload.php';

use \Place\Bar;
use \Visitor\BarVisitor;

/*
$bar = new Bar();

// Добавление посетителей с указанием имен и id любимых жанров
$visitors = [
    new BarVisitor('Володя', [0, 1, 6, 15]),
    new BarVisitor('Рэйгар', [1, 4, 6, 8, 11, 20]),
    new BarVisitor('Бальтазар', [11]),
    new BarVisitor('Ираклий', [1, 17, 20])
];
$bar->addVisitors($visitors);

// Володя заказывает музыку
$bar->getVisitors()[0]->setBehavior('OrderMusic', ['genreId' => 1]);

// Бар принимает заказ, включается новая музыка
$bar->changeMusicByOrder();

// Вывод действий на экран
echo nl2br($bar->getReport());
*/