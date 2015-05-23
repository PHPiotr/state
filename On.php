<?php

class On implements IState
{
    private $context;

    public function __construct(IContext $context)
    {
        $this->context = $context;
    }

    public function getOn()
    {
        echo 'already on.' . "\n";
        return $this;
    }

    public function getOff()
    {
        echo 'OFF' . "\n";
        $this->context->setCurrent($this->context->getOff());
        return $this;
    }
}
