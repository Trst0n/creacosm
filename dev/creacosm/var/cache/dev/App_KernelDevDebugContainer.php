<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQUwB4qx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQUwB4qx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQUwB4qx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQUwB4qx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQUwB4qx\App_KernelDevDebugContainer([
    'container.build_hash' => 'QUwB4qx',
    'container.build_id' => '84632a25',
    'container.build_time' => 1678717415,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQUwB4qx');
