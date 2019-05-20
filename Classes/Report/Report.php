<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 19:52
 */

namespace Report;


abstract class Report
{
    public function generate($place)
    {
        foreach($place->getVisitors() as $visitor) {
            $text .= $visitor->whatDo() . "\r\n";
        }

        return $text;
    }
}