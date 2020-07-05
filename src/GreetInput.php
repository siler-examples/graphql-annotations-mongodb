<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL\Annotation as GQL;
use Siler\Prelude\FromArray;

/**
 * @GQL\InputType()
 */
final class GreetInput
{
    use FromArray;

    /**
     * @GQL\Field()
     */
    public string $text;
}
