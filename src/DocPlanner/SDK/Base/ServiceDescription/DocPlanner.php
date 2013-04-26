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
	public static function factory()
	{
		return parent::factory(__DIR__.'/DocPlanner.json');
	}
}