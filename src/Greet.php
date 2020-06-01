<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL\Annotation\Field;
use Siler\GraphQL\Annotation\ObjectType;

/**
 * @ObjectType()
 */
final class Greet
{
    /**
     * @Field()
     */
    public string $_id;
    /**
     * @Field()
     */
    public string $text;
}
