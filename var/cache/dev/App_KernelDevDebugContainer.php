<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXePxbXM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXePxbXM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXePxbXM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXePxbXM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXePxbXM\App_KernelDevDebugContainer([
    'container.build_hash' => 'XePxbXM',
    'container.build_id' => 'c42df246',
    'container.build_time' => 1686306951,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXePxbXM');
