<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBuFsE4b\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBuFsE4b/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBuFsE4b.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBuFsE4b\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBuFsE4b\App_KernelDevDebugContainer([
    'container.build_hash' => 'BuFsE4b',
    'container.build_id' => '817e9a00',
    'container.build_time' => 1634775460,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBuFsE4b');