<?php declare(strict_types=1);

namespace App;

use MongoDB\Client;

final class Context
{
    public Client $mongodb;
}
