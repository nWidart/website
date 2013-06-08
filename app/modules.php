<?php

function simplifyNamespace($moduleName)
{
    return implode('',array_map('ucfirst', explode('/', $moduleName)));
}


/*
 * Handlings Modules
 */
$modules = array(
    'Lvlfr/Documentation',

    'Lvlfr/Website',
);

$basePath = app('path.src');

// Foreach existing modules
foreach ($modules as $module) if(is_dir($modulePath = $basePath . '/' . $module)) {

    $simplifiedNamespace = simplifyNamespace($module);

    // if views folder exists, register namespace
    if (is_dir($moduleViewPath = $modulePath . '/Views')) View::addNamespace($simplifiedNamespace, $moduleViewPath);

    // if Config folder exists, register namespace
    if (is_dir($moduleConfigPath = $modulePath . '/Config')) Config::addNamespace($simplifiedNamespace, $moduleConfigPath);

    // if routes file exists, then include it
    if (file_exists($moduleRouteFile = $modulePath . '/routes.php')) require $moduleRouteFile;
}
