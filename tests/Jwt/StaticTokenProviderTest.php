<?php

/*
 * This file is part of the Mercure Component project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Symfony\Component\Mercure\Tests\Jwt;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Mercure\Jwt\StaticTokenProvider;

class StaticTokenProviderTest extends TestCase
{
    const JWT = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiJtZXJjdXJlLXRlc3QiLCJuYW1lIjoiS8OpdmluIER1bmdsYXMiLCJpYXQiOjE1MTYyMzkwMjJ9.n0KvJ31TCswaK7KuHiN22cLzpjC2UT2rhWqhIDprfmA';

    public function testGetToken()
    {
        $provider = new StaticTokenProvider(self::JWT);
        $this->assertSame(self::JWT, $provider->getJwt());
    }
}
