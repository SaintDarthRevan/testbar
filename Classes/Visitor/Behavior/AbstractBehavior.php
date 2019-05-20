<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 16:26
 */

namespace Visitor\Behavior;

abstract class AbstractBehavior
{
    protected $params = [];

    public function __construct(array $params = [])
    {
        $this->params = $params;
    }

    abstract public function getMessage();

    public function getParam($key)
    {
        if (array_key_exists($key, $this->params)) {
            return $this->params[$key];
        }

        return false;
    }
}