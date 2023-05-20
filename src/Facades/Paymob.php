<?php

declare(strict_types=1);


namespace Skrskr\Paymob\Facades;

use Illuminate\Support\Facades\Facade;

class Paymob extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'paymob';
    }
}
