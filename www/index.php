<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL;
use Siler\Route;
use function Siler\GraphQL\init;

require_once __DIR__ . '/../bootstrap.php';

GraphQL\debug();

Route\post('/graphql', fn() => init($schema, $root_value, $context));
