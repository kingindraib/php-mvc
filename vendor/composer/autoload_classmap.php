<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\Auth\\Authenticible' => $baseDir . '/app/Auth/auth.php',
    'App\\Auth\\HasAuthentiacible' => $baseDir . '/app/Auth/AuthIntreface.php',
    'App\\Components\\Form' => $baseDir . '/app/components/form.php',
    'App\\Controllers\\Controller' => $baseDir . '/app/Controllers/Controller.php',
    'App\\Controllers\\PageController' => $baseDir . '/app/Controllers/PageController.php',
    'App\\Controllers\\admin\\AdminController' => $baseDir . '/app/Controllers/admin/AdminController.php',
    'App\\Controllers\\auth\\LoginController' => $baseDir . '/app/Controllers/auth/LoginController.php',
    'App\\Controllers\\home\\HomeController' => $baseDir . '/app/Controllers/home/HomeController.php',
    'App\\Middleware\\AuthMiddleware' => $baseDir . '/app/Middleware/AuthMiddleware.php',
    'App\\Middleware\\Middleware' => $baseDir . '/app/Middleware/Middleware.php',
    'App\\Models\\Model' => $baseDir . '/app/Models/Model.php',
    'App\\Models\\User' => $baseDir . '/app/Models/User.php',
    'App\\Provider\\DatabaseProvider' => $baseDir . '/app/Provider/DatabaseProvider.php',
    'App\\Provider\\Router' => $baseDir . '/app/Provider/Router.php',
    'App\\Provider\\Validation' => $baseDir . '/app/Provider/Validation.php',
    'Attribute' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'PhpToken' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
    'Stringable' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
    'UnhandledMatchError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
    'ValueError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
);
