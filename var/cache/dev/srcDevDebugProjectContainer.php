<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOxHwxDf\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOxHwxDf/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerOxHwxDf.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerOxHwxDf\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerOxHwxDf\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'OxHwxDf',
    'container.build_id' => 'c6295b3a',
    'container.build_time' => 1529104057,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerOxHwxDf');
