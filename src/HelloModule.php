<?php declare(strict_types=1);

namespace Application;

use Application\HelloModule\HelloController;
use Igni\Application\Controller\ControllerAggregate;
use Igni\Application\Providers\ControllerProvider;

class HelloModule implements ControllerProvider
{
    public function provideControllers(ControllerAggregate $controllers): void
    {
        $controllers->add(HelloController::class);
    }
}
