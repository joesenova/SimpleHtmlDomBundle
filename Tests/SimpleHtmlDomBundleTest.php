<?php

/*
 * This file is part of the ErivelloSimpleHtmlDomBundle.
 *
 * Edoardo Rivello <edoardo.rivello@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Joesenova\SimpleHtmlDomBundle\Tests;

use simple_html_dom;

class SimpleHtmlDomBundleTest extends WebTestCase
{


    public function testRegister()
	{
		$client = static::createClient();
		$container = $client->getContainer();

		$this->assertTrue($container->get('simple_html_dom') instanceof \simple_html_dom);
	}
}
