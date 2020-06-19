<?php declare(strict_types=1);

namespace App;

use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;
use MongoDB\Client;
use Symfony\Component\Dotenv\Dotenv;
use function Siler\GraphQL\annotated;

require_once __DIR__ . '/vendor/autoload.php';
(new Dotenv())->loadEnv(__DIR__ . '/.env');

$mongodb = new Client($_ENV['MONGODB_CONN_STR'], [], ['typeMap' => DocumentManager::CLIENT_TYPEMAP]);

$dm_config = new Configuration();
$dm_config->setDefaultDB($_ENV['MONGODB_DEFAULT_DB']);
$dm_config->setMetadataDriverImpl(AnnotationDriver::create(__DIR__ . '/src'));
$dm_config->setHydratorDir(__DIR__ . '/src/generated');
$dm_config->setHydratorNamespace('App\Hydrator');

$context = new Context();
$context->dm = DocumentManager::create($mongodb, $dm_config);

$root_value = new RootValue();

$schema = annotated([
    GreetInput::class,
    Greet::class,
    Mutation::class,
    Query::class,
]);
