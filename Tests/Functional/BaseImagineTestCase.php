<?php

namespace Liip\ImagineBundle\Tests\Functional;

use Liip\FunctionalTestBundle\Test\WebTestCase,
    Liip\ImagineBundle\Tests\Functional\app\AppKernel;

class BaseImagineTestCase extends WebTestCase
{
    static protected function createKernel(array $options = array())
    {
        return new AppKernel(
            isset($options['config']) ? $options['config'] : 'default.yml'
        );
    }
}