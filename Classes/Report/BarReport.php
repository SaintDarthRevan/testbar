<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 19:54
 */

namespace Report;

use Music\Genre;

class BarReport extends Report
{
    public function generate($bar)
    {
        $text = parent::generate($bar);
        $text = "В баре играет музыка: " . Genre::getGenreNameById($bar->getMusic()) . "\r\n === \r\n$text";

        return $text;
    }
}