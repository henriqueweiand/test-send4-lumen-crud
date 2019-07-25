<?php

use Illuminate\Contracts\Debug\ExceptionHandler;
use App\Exceptions\Handler;

abstract class TestCase extends Laravel\Lumen\Testing\TestCase
{

    public function createApplication()
    {
        return require __DIR__.'/../bootstrap/app.php';
    }

    public function disableExceptionHandling()
    {
        $this->oldExceptionHandler = $this->app->make(ExceptionHandler::class);
        $this->app->instance(
        ExceptionHandler::class,
        new class extends Handler {
            public function __construct() {}
            public function report(\Exception $e) {}
            public function render($request, \Exception $e) {
                throw $e;
            }
        }
        );
    }
}
