<?php


namespace Sayber\Edna\EdnaApiFacade;


use Illuminate\Support\Facades\Facade;



class EdnaApiFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ednaApi';
    }
}
