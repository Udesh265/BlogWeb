<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZFkQlaN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZFkQlaN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZFkQlaN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZFkQlaN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZFkQlaN\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZFkQlaN',
    'container.build_id' => '617246d6',
    'container.build_time' => 1651047963,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZFkQlaN');
