<?php declare(strict_types=1);

namespace Application;

use Igni\Http\Application;
use Igni\Http\Server;

// This is bootstrap class
(new class {
    public static function main(): void
    {
        require __DIR__ . '/../vendor/autoload.php';

        // You can pass DI container of your choice here:
        $application = new Application($myDependencyInjectionContainer = null);

        // Amend your http configuration below:
        $configuration = new Server\HttpConfiguration(
            getenv('APPLICATION_ADDRESS'),
            (int) getenv('APPLICATION_PORT')
        );

        // Setup http server, attach additional listeners, etc:
        $server = new Server($configuration);

        // Register your modules here:
        $application->extend(HelloModule::class);

        // Application start here
        $application->run($server);
    }

// Execute main method in the bootstrap class
})::main();
