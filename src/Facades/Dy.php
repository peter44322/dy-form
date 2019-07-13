<?php
namespace Peterzaccha\DyForm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static create(array $array)
 * @method static createColumn(array $array)
 * @method static addColumn($form, $second)
 */
class Dy extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'dy';
    }
}
