<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 06.05.2019
 * Time: 16:25
 */

namespace Place;

abstract class AbstractPlace implements \SplSubject
{
    protected $visitors = [];

    public function addVisitor($visitor)
    {
        $this->attach($visitor);
    }

    public function addVisitors(array $visitors)
    {
        foreach ($visitors as $visitor) {
            $this->addVisitor($visitor);
        }
    }

    public function getVisitors()
    {
        return $this->visitors;
    }

    public function getVisitorByNum($num)
    {
        if (array_key_exists($num, $this->visitors)) {
            return $this->visitors[$num];
        }
        return false;
    }

    public function attach(\SplObserver $visitor)
    {
        array_push($this->visitors, $visitor);
    }

    public function detach(\SplObserver $visitor)
    {
        $key = array_search($visitor, $this->visitors, true);
        if($key){
            unset($this->visitors[$key]);
        }
    }

    public function notify()
    {
        foreach($this->visitors as $visitor) {
            $visitor->update($this);
        }
    }

    abstract public function getReport();
}