<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE6VxPNP\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE6VxPNP/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerE6VxPNP.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerE6VxPNP\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerE6VxPNP\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'E6VxPNP',
    'container.build_id' => 'b34a8af1',
    'container.build_time' => 1540302645,
));
