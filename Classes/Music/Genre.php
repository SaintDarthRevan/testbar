<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.05.2019
 * Time: 19:46
 */

namespace Music;


class Genre
{
    private static $genresList = [
        0 => 'Блюз',
        1 => 'Джаз',
        2 => 'Метал',
        3 => 'Латино',
        4 => 'Инди',
        5 => 'Рок',
        6 => 'Электронная музыка',
        7 => 'Рок-н-ролл',
        8 => 'New Wave',
        9 => 'Пост-панк',
        10 => 'Инструментальная',
        11 => 'Кантри',
        12 => 'Шансон',
        13 => 'Диско',
        14 => 'Хип-хоп',
        15 => 'Мерсибит',
        16 => 'Хардкор',
        17 => 'Психоделический рок',
        18 => 'Хаус',
        19 => 'Поп',
        20 => 'Рэп'
    ];

    public static function getGenreNameById($id)
    {
        if (!array_key_exists($id, static::$genresList)) {
            //throw new \Exception('Жанр не найден');
            return false;
        } else {
            return static::$genresList[$id];
        }
    }

    public static function getGenreIdByName($name)
    {
        /*if ($id = array_search($name, $this->genresList) === false) {
            //throw new \Exception('Жанр не найден');
            return false;
        } else {
            return $id;
        }*/

        return array_search($name, static::$genresList);
    }

    public static function getGenresList()
    {
        return static::$genresList;
    }
}