<?php declare(strict_types=1);

namespace App;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;
use Siler\GraphQL\Annotation as GQL;
use Siler\Prelude\FromArray;

/**
 * @GQL\ObjectType()
 * @ODM\Document(collection="greetings")
 */
final class Greet
{
    use FromArray;

    /**
     * @GQL\Field()
     * @ODM\Id()
     */
    public string $_id;
    /**
     * @GQL\Field()
     * @ODM\Field(type="string")
     */
    public string $text;

    /**
     * @GQL\Field()
     */
    public function upperCaseText(): string
    {
        return strtoupper($this->text);
    }
}
