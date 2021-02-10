<?php


namespace Sayber\Edna;


use Illuminate\Support\Facades\Facade;


/**
 * Class EdnaApiFacade
 * @package Sayber\Edna
 */
class EdnaApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ednaApi';
    }
}
