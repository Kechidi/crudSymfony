<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFPimxD0\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFPimxD0/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFPimxD0.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFPimxD0\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFPimxD0\App_KernelDevDebugContainer([
    'container.build_hash' => 'FPimxD0',
    'container.build_id' => '8945ed4a',
    'container.build_time' => 1647690504,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFPimxD0');