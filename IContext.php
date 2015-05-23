<?php

interface IContext
{

    function setCurrent(IState $state);

    function getCurrent();
}
