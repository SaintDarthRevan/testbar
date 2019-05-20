<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 16:39
 */

namespace Visitor;

use Behavior;

abstract class AbstractVisitor implements \SplObserver
{
    protected $name = '';
    protected $behavior = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function whatDo()
    {
        return $this->name.$this->behavior->getMessage();
    }

    public function setBehavior($behavior, $params = [])
    {
        $behavior_classname = "Visitor\Behavior\\" . $behavior;
        $this->behavior = new $behavior_classname($params);
    }

    public function getBehavior()
    {
        return $this->behavior;
    }

    abstract public function update(\SplSubject $place);
}