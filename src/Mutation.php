<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL\Annotation\Args;
use Siler\GraphQL\Annotation\Field;
use Siler\GraphQL\Annotation\ObjectType;
use function Siler\array_get_arr;

/**
 * @ObjectType()
 */
final class Mutation
{
    /**
     * @Field()
     * @Args({@Field(name="input", type=GreetInput::class)})
     */
    static public function setMessage(RootValue $root, array $args, Context $context): string
    {
        $input = GreetInput::fromArray(array_get_arr($args, 'input'));
        $result = $context->mongodb->test->greetings->insertOne($input);
        return $result->getInsertedId();
    }
}
