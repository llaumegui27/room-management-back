<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBS89dhN\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBS89dhN/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerBS89dhN.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerBS89dhN\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerBS89dhN\App_KernelProdContainer([
    'container.build_hash' => 'BS89dhN',
    'container.build_id' => 'b5a35e93',
    'container.build_time' => 1686304138,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBS89dhN');
