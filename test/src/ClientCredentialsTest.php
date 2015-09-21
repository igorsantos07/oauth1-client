<?php
/**
 * This file is part of the league/oauth1-client library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Ben Corlett <hello@webcomm.io>
 * @license http://opensource.org/licenses/MIT MIT
 * @link http://thephpleague.com/oauth1-client/ Documentation
 * @link https://packagist.org/packages/league/oauth1-client Packagist
 * @link https://github.com/thephpleague/oauth1-client GitHub
 */

namespace League\OAuth1\Client\Tests;

use League\OAuth1\Client\Credentials\ClientCredentials;
use Mockery as m;
use PHPUnit_Framework_TestCase;

class ClientCredentialsTest extends PHPUnit_Framework_TestCase
{
    /**
     * Close mockery.
     */
    public function tearDown()
    {
        m::close();
    }

    public function testManipulating()
    {
        $credentials = new ClientCredentials();
        $this->assertNull($credentials->getIdentifier());
        $credentials->setIdentifier('foo');
        $this->assertEquals('foo', $credentials->getIdentifier());
        $this->assertNull($credentials->getSecret());
        $credentials->setSecret('foo');
        $this->assertEquals('foo', $credentials->getSecret());
    }
}