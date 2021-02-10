<?php


namespace Edna;


use Illuminate\Support\Facades\Facade;


/**
 * Class EdnaApiFacade
 * @package Edna
 */
class EdnaApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ednaApi';
    }
}
