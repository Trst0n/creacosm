<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container98Ckg8o\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container98Ckg8o/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container98Ckg8o.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container98Ckg8o\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container98Ckg8o\App_KernelDevDebugContainer([
    'container.build_hash' => '98Ckg8o',
    'container.build_id' => '74af3bde',
    'container.build_time' => 1680015123,
], __DIR__.\DIRECTORY_SEPARATOR.'Container98Ckg8o');
