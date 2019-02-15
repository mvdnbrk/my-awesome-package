<?php

namespace Mvdnbrk\MyAwesomePackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mvdnbrk\MyAwesomePackage\Skeleton\SkeletonClass
 */
class MyAwesomePackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'my-awesome-package';
    }
}
