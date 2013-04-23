<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 15:54
 */
namespace DocPlanner\SDK\ServiceDescription;

use Guzzle\Service\Description\ServiceDescription;

class DocPlanner extends ServiceDescription
{
	public static function factory($serviceDescriptionUrl)
	{
		$config = file_get_contents($serviceDescriptionUrl);
		$config = json_decode($config, true);
		return parent::factory($config);
	}
}