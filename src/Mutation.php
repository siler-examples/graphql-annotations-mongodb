<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL\Annotation\Args;
use Siler\GraphQL\Annotation\Field;
use Siler\GraphQL\Annotation\ObjectType;
use function Siler\Obj\patch;

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
        $greet = Greet::fromArray($args['input']);

        $context->dm->persist($greet);
        $context->dm->flush();

        return $greet->_id;
    }
}
