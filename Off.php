<?php

class Off implements IState
{
    private $context;

    public function __construct(IContext $context)
    {
        $this->context = $context;
    }

    public function getOff()
    {
        echo 'already off.' . "\n";
        return $this;
    }

    public function getOn()
    {
        echo 'ON' . "\n";
        $this->context->setCurrent($this->context->getOn());
        return $this;
    }
}
