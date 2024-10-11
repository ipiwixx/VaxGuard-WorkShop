<?php
namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'pediatre' => \App\Http\Middleware\PediatreMiddleware::class,
        'user' => \App\Http\Middleware\UserMiddleware::class,
        // autres middleware...
    ];
}