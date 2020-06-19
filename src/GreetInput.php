<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL\Annotation\Field;
use Siler\GraphQL\Annotation\InputType;
use Siler\Prelude\FromArray;

/**
 * @InputType()
 */
final class GreetInput
{
    use FromArray;

    /**
     * @Field()
     */
    public string $text;
}
