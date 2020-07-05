<?php declare(strict_types=1);

namespace App;

use Siler\GraphQL\Annotation as GQL;

/**
 * @GQL\ObjectType()
 */
final class Mutation
{
    /**
     * @GQL\Field()
     * @GQL\Args({@GQL\Field(name="input", type=GreetInput::class)})
     */
    static public function setMessage(RootValue $root, array $args, Context $context): string
    {
        $greet = Greet::fromArray($args['input']);

        $context->dm->persist($greet);
        $context->dm->flush();

        return $greet->_id;
    }
}
