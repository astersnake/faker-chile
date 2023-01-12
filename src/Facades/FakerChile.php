<?php

namespace Astersnake\FakerChile\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astersnake\FakerChile\FakerChile
 */
class FakerChile extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Astersnake\FakerChile\FakerChile::class;
    }
}
