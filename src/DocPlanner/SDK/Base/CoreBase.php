<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:54
 */
namespace DocPlanner\SDK\Base;

abstract class CoreBase
{
	/**
	 * @var BaseSDK
	 */
	protected $baseSDK;

	/**
	 * @param BaseSDK $sdk
	 */
	public function __construct(BaseSDK $sdk)
	{
		$this->baseSDK = $sdk;
	}
}