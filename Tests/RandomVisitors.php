<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 11.05.2019
 * Time: 3:04
 */

namespace Tests;

use \Music\Genre;
use \Visitor\BarVisitor;

class RandomVisitors
{
    const GENRES_MAX = 5;
    private static $namesList = [
        'Альбус',
        'Бальтазар',
        'Геральд',
        'Эддард',
        'Джиор',
        'Ахиллес',
        'Болдуин',
        'Арканн',
        'Гектор',
        'Рэйден',
        'Эйгон',
        'Реван',
        'Гален',
        'Эррон',
        'Аргус',
        'Всеволод',
        'Герас',
        'ХОДОР',
        'Альтаир',
        'Орсен',
        'Сэмюэл',
        'Володя'
    ];
    private static $avaiableNames = [];

    public static function generate($count)
    {
        $visitors = [];

        for($i = 0; $i < $count; $i++) {
            $visitor = new BarVisitor(static::getRandName(), static::getRandGenres(rand(1, self::GENRES_MAX)));
            array_push($visitors, $visitor);
        }

        return $visitors;
    }

    public static function getRandName()
    {
        if (!count(static::$avaiableNames)) {
            static::$avaiableNames = static::$namesList;
        }

        if (count(static::$avaiableNames) == 1) {
            $num = 0;
        } else {
            $num = rand(0, count(static::$avaiableNames)-1);
        }

        $name = static::$avaiableNames[$num];
        unset(static::$avaiableNames[$num]); // Удаляем имя из списка, дабы избежать повторений
        static::$avaiableNames = array_values(static::$avaiableNames); // Сбрасываем ключи массива

        return $name;
    }

    public static function getRandGenres($count)
    {
        $genres = [];
        $genresList = Genre::getGenresList();

        for ($i = 0; $i < $count; $i++) {

            do {
                $num = rand(0, count($genresList) - 1);

            } while(in_array($num, $genres)); // Избегаем повторения любимых жанров для одного посетителя*/

            $genres[] = $num;
        }

        return $genres;
    }
}