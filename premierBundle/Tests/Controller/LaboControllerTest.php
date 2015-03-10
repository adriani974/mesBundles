<?php

namespace Wmd\premierBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LaboControllerTest extends WebTestCase
{
    public function testHelloworld()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/helloWorld');
    }

    public function testHelloname()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/helloName');
    }

}
