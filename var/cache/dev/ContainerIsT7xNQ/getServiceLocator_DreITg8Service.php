<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'service_locator.dreITg8' shared service.

return $this->privates['service_locator.dreITg8'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('tokenStorage' => function () {
    return ($this->services['security.token_storage'] ?? $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage());
}, 'userRepository' => function (): ?\App\Repository\UserRepository {
    return ($this->privates['App\Repository\UserRepository'] ?? $this->load(__DIR__.'/getUserRepositoryService.php'));
}));
