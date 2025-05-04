<?php

/** @var Application $app */

use App\Controllers\HomeController;
use FBL\Application;

/* Documentation:
 * withoutCSRFToken() - Исключает проверку на CSRF если метода нет то по умолчанию true
 * */

const MIDDLEWARE = [
    'auth' => \FBL\Middleware\Auth::class,
    'guest' => \FBL\Middleware\Guest::class,
];

$app->router->get('/post/(?P<slug>[a-z0-9-]+)/?', function () {
    return 'Post ' . get_route_param('slug');
});

$app->router->get('/', [HomeController::class, 'index']);

// Seed
$app->router->get('/seed', function () {
    require_once __DIR__ . '/seeders/categories.php';
    require_once __DIR__ . '/seeders/products.php';
    return 'OK';
});

//dump($app->router->getRoutes());