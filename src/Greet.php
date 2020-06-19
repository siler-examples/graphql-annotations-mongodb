<?php declare(strict_types=1);

namespace App;

use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;
use Siler\GraphQL\Annotation\Field;
use Siler\GraphQL\Annotation\ObjectType;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Field as MField;
use Siler\Prelude\FromArray;

/**
 * @ObjectType()
 * @Document(collection="greetings")
 */
final class Greet
{
    use FromArray;

    /**
     * @Field()
     * @Id
     */
    public string $_id;
    /**
     * @Field()
     * @MField(type="string")
     */
    public string $text;

    /**
     * @Field()
     */
    public function upperCaseText(): string
    {
        return strtoupper($this->text);
    }
}
