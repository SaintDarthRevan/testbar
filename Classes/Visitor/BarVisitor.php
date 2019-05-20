<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 16:41
 */

namespace Visitor;

use \Visitor\Behavior\{Drink, Dance, OrderMusic};

class BarVisitor extends AbstractVisitor
{
    private $favGenres = [];

    public function __construct(string $name, array $favGenres)
    {
        parent::__construct($name);
        $this->favGenres = $favGenres;
        //$this->behavior = new Drink();
    }

    public function getFavGenres()
    {
        return $this->favGenres;
    }

    public function choiceGenre()
    {
        $id = rand(0, (count($this->favGenres) - 1));
        return $this->favGenres[$id];
    }

    public function update(\SplSubject $place)
    {
        $this->choiceNewBehavior($place->getMusic());
    }

    public function choiceNewBehavior($music)
    {
        if (in_array($music, $this->favGenres)) {
            $this->setBehavior('Dance');
        } else {
            $this->setBehavior('Drink');
        }
        if ($this->behavior == null) var_dump($this);
    }
}