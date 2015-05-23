<?php

class Context implements IContext
{
    private $on, $off, $current;

    public function __construct()
    {
        $this->on = new On($this);
        $this->off = new Off($this);
        $this->setCurrent($this->off);
    }

    public function getCurrent()
    {
        return $this->current;
    }

    public function setCurrent(\IState $state)
    {
        $this->current = $state;
    }

    public function getOn()
    {
        return $this->on;
    }

    public function getOff()
    {
        return $this->off;
    }

    public function setOn()
    {
        $this->getCurrent()->getOn();
    }

    public function setOff()
    {
        $this->getCurrent()->getOff();
    }
}
