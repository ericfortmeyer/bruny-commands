<?php

declare(strict_types=1);

namespace Bruny\Commands;

/**
 * Exposes the execute method and ensures that
 * implementations are callable.
 *
 * @package Bruny\Commands
 */
interface CommandInterface
{
    /**
     * @api
     */
    public function __invoke(...$args);

    /**
     * @api
     */
    public function execute(...$args);
}
