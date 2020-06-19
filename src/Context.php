<?php declare(strict_types=1);

namespace App;

use Doctrine\ODM\MongoDB\DocumentManager;

final class Context
{
    public DocumentManager $dm;
}
