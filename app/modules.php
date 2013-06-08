<?php

function createViewNamespace($moduleName)
{
    return implode('',array_map('ucfirst', explode('/', $moduleName)));
}


/*
 * Handlings Modules
 */
$modules = array(
    'Lvlfr/Website',
    'Lvlfr/Documentation',
);

$basePath = app('path.src');

// Foreach existing modules
foreach ($modules as $module) if(is_dir($modulePath = $basePath . '/' . $module)) {

    // if views folder exists, register namespace
    if (is_dir($moduleViewPath = $modulePath . '/views')) View::addNamespace(createViewNamespace($module), $moduleViewPath);

    // if routes file exists, then include it
    if (file_exists($moduleRouteFile = $modulePath . '/routes.php')) include $moduleRouteFile;
}
