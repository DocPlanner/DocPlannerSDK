<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 16:27
 */
namespace DocPlanner\SDK\Base;

use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Class Parameter
 * @package DocPlanner\SDK\Adapter
 */
class Parameter extends ParameterBag
{
	/**
	 * Clear parameters array
	 * @return Parameter
	 */
	public function clear()
	{
		$this->parameters = [];
		return $this;
	}
}
