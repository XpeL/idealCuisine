<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK5qsyiy\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK5qsyiy/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerK5qsyiy.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerK5qsyiy\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerK5qsyiy\srcDevDebugProjectContainer();