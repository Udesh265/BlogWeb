<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8JQ6OVz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8JQ6OVz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8JQ6OVz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8JQ6OVz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8JQ6OVz\App_KernelDevDebugContainer([
    'container.build_hash' => '8JQ6OVz',
    'container.build_id' => '94d0a553',
    'container.build_time' => 1650818986,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8JQ6OVz');
