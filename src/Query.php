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
     * @Field()
     */
    static public function hello(): string
    {
        return 'Hello, World!';
    }
}
