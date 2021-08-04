<?php

declare(strict_types=1);

namespace Bruny\Commands;

/**
 * Enables executing commands in a database context.
 */
abstract class DbCommand implements CommandInterface
{
    public function __construct(protected DbAdapterInterface $db)
    {
    }
}
