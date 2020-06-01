<?php declare(strict_types=1);

namespace App;

use Siler\Route;
use function Siler\GraphQL\annotated;
use function Siler\GraphQL\init;

require_once __DIR__ . '/../vendor/autoload.php';

$context = new Context();
$root_value = new RootValue();
$schema = annotated([Query::class]);

Route\post('/graphql', fn() => init($schema, $root_value, $context));
