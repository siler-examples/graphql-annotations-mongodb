<?php declare(strict_types=1);

namespace App;

use MongoDB\Client;
use Siler\Route;
use Siler\GraphQL;
use function Siler\Env\env_var;
use function Siler\GraphQL\annotated;
use function Siler\GraphQL\init;

require_once __DIR__ . '/../vendor/autoload.php';

GraphQL\debug();

$context = new Context();
$context->mongodb = new Client(env_var('MONGODB'));

$root_value = new RootValue();

$schema = annotated([
    GreetInput::class,
    Greet::class,
    Mutation::class,
    Query::class,
]);

Route\post('/graphql', fn() => init($schema, $root_value, $context));
