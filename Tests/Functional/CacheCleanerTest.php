<?php

namespace Liip\ImagineBundle\Tests\Functional;

class CacheCleanerTest extends BaseImagineTestCase
{
    public function testCacheClean()
    {
        $path = $this->getUrl('_imagine_my_thumb', array('path' => 'apple-touch-icon.png'));
        $client = $this->makeClient();
        $client->request('GET', $path);
        $this->assertTrue($client->getResponse()->isRedirection());

        $crawler = $client->followRedirect();
        var_dump($client->getResponse()->getContent());
        $this->assertTrue($client->getResponse()->isSuccessful());
    }
}
