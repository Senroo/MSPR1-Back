<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYWYlBHQ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYWYlBHQ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYWYlBHQ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYWYlBHQ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYWYlBHQ\App_KernelDevDebugContainer([
    'container.build_hash' => 'YWYlBHQ',
    'container.build_id' => '303a1c2d',
    'container.build_time' => 1610719450,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYWYlBHQ');
