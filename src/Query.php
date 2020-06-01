<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL\Annotation\Field;
use Siler\GraphQL\Annotation\ObjectType;

/**
 * @ObjectType()
 */
final class Query
{
    /**
     * @Field(description="Just a regular greeting")
     * @param RootValue $rootValue
     * @param array $args
     * @param Context $context
     * @return string
     */
    static public function hello(RootValue $rootValue, array $args, Context $context): string
    {
        return $rootValue->hello;
    }

    /**
     * @Field(listOf=Greet::class)
     * @param RootValue $rootValue
     * @param array $args
     * @param Context $context
     * @return array
     */
    static public function greetings(RootValue $rootValue, array $args, Context $context): array
    {
        return $context->mongodb->test->greetings->find()->toArray();
    }
}
