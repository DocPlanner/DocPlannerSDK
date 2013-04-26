<?php
/**
 * Author: Łukasz Barulski
 * Date: 24.04.13 16:31
 */
namespace DocPlanner\SDK\Model\Visit;

use DocPlanner\SDK\Base\Result;

/**
 * Class Cancel
 * @package DocPlanner\SDK\Model\Visit
 */
class Cancel extends Result
{
	public $code;
	public $message;
}