<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 16:24
 */

namespace Place;

use \Music\Genre;
use \Report\BarReport;

class Bar extends AbstractPlace
{
    private $music = null;

    public function getMusic()
    {
        return $this->music;
    }

    public function setMusic($genre_id)
    {
        // Если запрошенный жанр доступен и никто еще не заказал музыку - принимаем заказ
        if ($this->music == null && Genre::getGenreNameById($genre_id) != false) {
            $this->music = $genre_id;
            $this->notify();
            return true;
        } else {
            return false;
        }
    }

    public function changeMusicByOrder()
    {
        foreach ($this->visitors as $visitor) {
            $behavior = $visitor->getBehavior();
            if ($behavior != null && $behavior instanceof \Visitor\Behavior\OrderMusic) {
                break;
            } else {
                $behavior = null;
            }
        }

        if ($behavior) {
            $this->setMusic($behavior->getParam('genreId'));
        }
    }

    public function getReport()
    {
        //Выводим на экран, что в данный момент происходит в заведении
        $report = new BarReport();
        return $report->generate($this);
    }
}