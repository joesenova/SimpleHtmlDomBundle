<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Joesenova\SimpleHtmlDomBundle\Tests\Fixtures\app;

// get the autoload file
$dir = __DIR__;
$lastDir = null;
while ($dir !== $lastDir) {
	$lastDir = $dir;

	if (is_file($dir.'/autoload.php')) {
		require_once $dir.'/autoload.php';
		break;
	}

	if (is_file($dir.'/autoload.php.dist')) {
		require_once $dir.'/autoload.php.dist';
		break;
	}

	$dir = dirname($dir);
}

use Exception;
use Joesenova\SimpleHtmlDomBundle\SimpleHtmlDomBundle;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * App Test Kernel for functional tests.
 */
class AppKernel extends Kernel
{
	public function __construct($environment, $debug)
	{
		parent::__construct($environment, $debug);
	}

	public function registerBundles(): iterable
    {
		return [
			new FrameworkBundle(),
			new SimpleHtmlDomBundle(),
		];
	}

	public function init()
	{
	}

	public function getRootDir(): string
    {
		return __DIR__;
	}

	public function getCacheDir(): string
    {
		return sys_get_temp_dir().'/'.Kernel::VERSION.'/simple-html-dom-bundle/cache/'.$this->environment;
	}

	public function getLogDir(): string
    {
		return sys_get_temp_dir().'/'.Kernel::VERSION.'/simple-html-dom-bundle/logs';
	}

    /**
     * @throws Exception
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
		$loader->load(__DIR__.'/config/'.$this->environment.'.yml');
	}

	public function serialize(): string
    {
		return serialize(array($this->getEnvironment(), $this->isDebug()));
	}

	public function unserialize($str): void
    {
		call_user_func_array(array($this, '__construct'), unserialize($str));
	}
}
