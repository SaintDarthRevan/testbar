<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 16:28
 */

namespace Visitor\Behavior;

use \Music\Genre;

class OrderMusic extends AbstractBehavior
{
    //private $answer = false;

    public function getMessage()
    {
        $res =  ' заказывает музыку жанра ' . Genre::getGenreNameById($this->params['genreId']);
        //. Заказ ';
        /*if ($this->answer == false) {
            $res .= 'не принят - кто-то уже сделал заказ.';
        } else {
            $res .= 'принят.';
        }*/

        return $res;
    }
}