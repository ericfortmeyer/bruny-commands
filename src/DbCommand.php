<?php

declare(strict_types=1);

namespace Bruny\Commands;

use Bruny\Adapters\DatabaseContext\DbAdapterInterface;

/**
 * Enables executing commands in a database context.
 */
abstract class DbCommand implements CommandInterface
{
    public function __construct(protected DbAdapterInterface $db)
    {
    }
}
