<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXrzsdog\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXrzsdog/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXrzsdog.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXrzsdog\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXrzsdog\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xrzsdog',
    'container.build_id' => '547a8ad8',
    'container.build_time' => 1518709200,
));
