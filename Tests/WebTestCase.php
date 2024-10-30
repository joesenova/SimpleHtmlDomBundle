<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Joesenova\SimpleHtmlDomBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as BaseWebTestCase;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpKernel\KernelInterface;

abstract class WebTestCase extends BaseWebTestCase
{
    protected static function getContainer(array $options = array()): Container
    {
        if (!static::$kernel) {
            static::$kernel = static::createKernel($options);
        }
        static::$kernel->boot();

        return static::getContainer()->get(static::$kernel->getContainer()->getParameter('simple_html_dom'));
    }
    
    protected static function getKernelClass(): string
    {
        require_once __DIR__.'/Fixtures/app/AppKernel.php';

        return 'Joesenova\SimpleHtmlDomBundle\Tests\Fixtures\app\AppKernel';
    }    

    protected static function createKernel(array $options = array()): KernelInterface
    {
        $class = self::getKernelClass();

        return new $class(
            'default',
            $options['debug'] ?? true
        );
    }
}
