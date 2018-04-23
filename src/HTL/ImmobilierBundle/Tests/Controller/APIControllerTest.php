<?php

namespace HTL\ImmobilierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class APIControllerTest extends WebTestCase
{
    public function testApi()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/api');
    }

}
