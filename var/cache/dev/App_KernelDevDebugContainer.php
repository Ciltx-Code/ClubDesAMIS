<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE7BPI21\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE7BPI21/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE7BPI21.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE7BPI21\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE7BPI21\App_KernelDevDebugContainer([
    'container.build_hash' => 'E7BPI21',
    'container.build_id' => 'cea07d14',
    'container.build_time' => 1651177360,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE7BPI21');
