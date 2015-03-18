<?php
namespace Isign\ClientBundle\Tests;

use GuzzleHttp\Subscriber\Oauth\Oauth1;
use Symfony\Component\DependencyInjection\Container;

class IsignServiceClientTest extends AbstractTestCase
{
    public function testIsignClientInstance()
    {
        $client = $this->getContainer()->get('isign_client.service.client');
        $this->assertInstanceOf('\Isign\Client', $client);
    }
}
