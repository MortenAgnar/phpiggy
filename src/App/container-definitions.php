<?php

declare (strict_types = 1);

use Framework\{TemplateEngine, Database};
use App\Config\Paths;
use App\Services\ValidatorService;

return[
    TemplateEngine::class => fn() => new TemplateEngine(Paths::VIEW),
    ValidatorService::class => fn() => new ValidatorService(),
    Database::class => fn() => new Database($_EVV['DB_DRIVER'], [
        'host' => $_EVV['DB_HOST'],
        'port' => $_EVV['DB_PORT'],
        'dbname' => $_EVV['DB_NAME'],
    ], $_ENV['DB_USER'], $_ENV['DB_PASS'])
];