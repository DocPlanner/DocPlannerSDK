<?php
/**
 * Author: Łukasz Barulski
 * Date: 22.07.13 10:31
 */
namespace DocPlanner\SDK\Model\Visit;

use DocPlanner\SDK\Base\Result;

/**
 * Class Details
 * @package DocPlanner\SDK\Model\Visit
 */
class Details extends Result
{
	/**
	 * @var Result
	 */
	public $address = [];

	/**
	 * @var Result
	 */
	public $visit = [];
}