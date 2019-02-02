<?php

declare(strict_types=1);

namespace Infection\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class RootTest extends TestCase
{
    public function test_it()
    {
        $this->assertSame(1, 1);
    }
}
