<?php
/**
 * Author: Łukasz Barulski
 * Date: 24.04.13 16:31
 */
namespace DocPlanner\SDK\Model\Geo;

use DocPlanner\SDK\Base\Result;

/**
 * Class Cities
 * @package DocPlanner\SDK\Model\Geo
 */
class Cities extends Result
{
	protected $id;
	protected $name;
	protected $urlname;
	protected $is_main;
}