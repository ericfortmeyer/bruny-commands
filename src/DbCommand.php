<?php

declare(strict_types=1);

namespace Bruny\Commands;

use PDO;

abstract class DbCommand
{
    public function __construct(protected PDO $db)
    {
    }
}
