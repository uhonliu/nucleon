<?php

namespace App\Kernels\Http\Modules\Frontend;

use App\Core\Providers\SomeApiServices as SomeApiProvider;
use Neutrino\Module as NeutrinoModule;
use Phalcon\DiInterface;

/**
 * Class Kernel
 *
 * @package App\Kernels\Http\Modules\Frontend\Controllers
 */
class Module extends NeutrinoModule
{
    /**
     * Return the Provider List to load.
     *
     * @var string[]
     */
    protected $providers = [
        /*
         * SomeApi Service
         */
        SomeApiProvider::class
    ];

    public function registerServices(DiInterface $di)
    {
        parent::registerServices($di); // TODO: Change the autogenerated stub

        $this->router->setDefaultController('App\Kernels\Http\Modules\Frontend\Controllers');
    }

}
