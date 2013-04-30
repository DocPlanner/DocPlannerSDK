<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;
use DocPlanner\SDK\Base\Result;

/**
 * Class Geo
 * @package DocPlanner\SDK\Core
 */
class Geo extends CoreBase
{
	/**
	 * @param null|string $phrase
	 *
	 * @return Result|\DocPlanner\SDK\Model\Geo\Cities[]|array
	 */
	public function cities($phrase = null)
	{
		$this->parameter->add(['phrase' => $phrase]);
		$result = $this->baseSDK->execute('geo.cities', $this->parameter);
		return $result;
	}
}