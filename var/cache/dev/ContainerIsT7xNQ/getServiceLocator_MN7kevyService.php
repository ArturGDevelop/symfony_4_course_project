<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.MN7kevy' shared service.

return $this->privates['service_locator.MN7kevy'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('entityManager' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'userRepository' => function (): ?\App\Repository\UserRepository {
    return ($this->privates['App\Repository\UserRepository'] ?? $this->load(__DIR__.'/getUserRepositoryService.php'));
}));