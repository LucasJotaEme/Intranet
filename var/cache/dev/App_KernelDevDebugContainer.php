<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDexnPHT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDexnPHT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDexnPHT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDexnPHT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDexnPHT\App_KernelDevDebugContainer([
    'container.build_hash' => 'DexnPHT',
    'container.build_id' => '4803fa31',
    'container.build_time' => 1597063798,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDexnPHT');
