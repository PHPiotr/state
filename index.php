<?php

function __autoload($class)
{
    require_once $class . '.php';
}
$c = new Context();
$c->setOn();
$c->setOff();
$c->setOff();
$c->setOff();
$c->setOff();
$c->setOff();
