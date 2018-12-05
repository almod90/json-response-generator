<?php
/**
 * Created by PhpStorm.
 * User: AlMod
 * Date: 13.10.2018
 * Time: 21:40
 */

namespace almod90\JsonResponse\Facades;

use Illuminate\Support\Facades\Facade;

class JSR extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'json-response';
    }
}
