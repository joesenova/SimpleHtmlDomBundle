<?php

/*
 * This file is part of the ErivelloSimpleHtmlDomBundle.
 *
 * Edoardo Rivello <edoardo.rivello@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MacroProg\SimpleHtmlDomBundle\Tests;

class SimpleHtmlDomBundleTest extends WebTestCase
{
	public function testRegister()
	{
		$client = static::createClient();
		$container = $client->getContainer();

		$parser = $container->get('simple_html_dom');

		$this->assertTrue($parser instanceof \simple_html_dom);
	}
}
