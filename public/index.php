<?php

use Illuminate\Foundation\Http\Kernel;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

// Load Composer's autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Handle HTTP requests
$kernel = $app->make(Kernel::class);

try {
    $response = $kernel->handle(
        $request = Request::capture()
    );
    $response->send();
    $kernel->terminate($request, $response);
} catch (Exception $e) {
    Log::error('Application Error: ' . $e->getMessage());
    http_response_code(500);
    echo "An error occurred. Please check the logs.";
}
