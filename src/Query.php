<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL\Annotation as GQL;

/** @GQL\ObjectType() */
final class Query
{
    /** @GQL\Field(description="Just a regular greeting") */
    static public function hello(RootValue $rootValue, array $args, Context $context): string
    {
        return $rootValue->hello;
    }

    /** @GQL\Field(listOf=Greet::class) */
    static public function greetings(RootValue $rootValue, array $args, Context $context): array
    {
        return $context->dm->getRepository(Greet::class)->findAll();
    }
}
