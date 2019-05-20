<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 16:28
 */

namespace Visitor\Behavior;


class Drink extends AbstractBehavior
{
    public function getMessage()
    {
        return ' употребляет коктейли.';
    }
}