<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 15:54
 */
namespace DocPlanner\SDK\Base\ServiceDescription;

use Guzzle\Service\Description\ServiceDescription;

/**
 * Class DocPlanner
 * @package DocPlanner\SDK\Base\ServiceDescription
 */
class DocPlanner extends ServiceDescription
{
	public static function factory($config = null, array $options = array())
	{
		return parent::factory($config ?: __DIR__.'/DocPlanner.json', $options);
	}
}