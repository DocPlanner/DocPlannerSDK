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
	 * @var Parameter
	 */
	protected $parameter;

	/**
	 * @var array
	 */
	protected $loggedOnly = [];

	/**
	 * @param BaseSDK   $sdk
	 * @param Parameter $parameter
	 */
	public function __construct(BaseSDK $sdk, Parameter $parameter)
	{
		$this->baseSDK = $sdk;
		$this->parameter = $parameter;
	}
}