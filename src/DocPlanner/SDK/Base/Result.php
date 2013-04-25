<?php
/**
 * Author: Łukasz Barulski
 * Date: 24.04.13 13:35
 */
namespace DocPlanner\SDK\Base;

/**
 * Class Result
 * @package DocPlanner\SDK\Base
 */
class Result extends \ArrayObject
{
	/**
	 * @param array $input
	 */
	public function __construct($input = null)
	{
		foreach ($input as $key => $value)
		{
			if (property_exists($this, $key))
			{
				$this->$key = $value;
			}
		}
		parent::__construct($input, \ArrayObject::ARRAY_AS_PROPS | \ArrayObject::STD_PROP_LIST);
	}
}