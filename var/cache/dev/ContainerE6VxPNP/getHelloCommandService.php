<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'console.command.public_alias.App\Command\HelloCommand' shared autowired service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/src/Command/HelloCommand.php';

return $this->services['console.command.public_alias.App\Command\HelloCommand'] = new \App\Command\HelloCommand(($this->services['app.greeting'] ?? $this->load(__DIR__.'/getApp_GreetingService.php')));
