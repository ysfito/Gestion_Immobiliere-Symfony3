<?php

namespace HTL\ImmobilierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FrontControllerTest extends WebTestCase
{
    public function testSearch()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'front/bien/search');
    }

    public function testReserver()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'front/bien/reserver');
    }

}
