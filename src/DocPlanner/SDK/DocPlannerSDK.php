<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:37
 */
namespace DocPlanner\SDK;

use DocPlanner\SDK\Base\BaseSDK;
use DocPlanner\SDK\Base\Parameter;
use DocPlanner\SDK\Core\Doctor;
use DocPlanner\SDK\Core\User;
use DocPlanner\SDK\Core\Visit;

class DocPlannerSDK
{
	/**
	 * @var Doctor
	 */
	protected $doctor;

	/**
	 * @var User
	 */
	protected $user;

	/**
	 * @var Visit
	 */
	protected $visit;

	/**
	 * @var BaseSDK
	 */
	protected $baseSDK;

	/**
	 * @var Base\Parameter
	 */
	protected $parameter;

	/**
	 * @param string $consumerKey
	 * @param string $consumerSecret
	 */
	public function __construct($consumerKey, $consumerSecret)
	{
		$this->baseSDK = new BaseSDK($consumerKey, $consumerSecret);
		$this->parameter = new Parameter();
	}

	/**
	 * @return Doctor
	 */
	public function doctor()
	{
		if (null === $this->doctor)
		{
			$this->doctor = new Doctor($this->baseSDK, $this->parameter);
		}
		return $this->doctor;
	}

	/**
	 * @return User
	 */
	public function user()
	{
		if (null === $this->user)
		{
			$this->user = new User($this->baseSDK, $this->parameter);
		}
		return $this->user;
	}

	/**
	 * @return Visit
	 */
	public function visit()
	{
		if (null === $this->visit)
		{
			$this->visit = new Visit($this->baseSDK, $this->parameter);
		}
		return $this->visit;
	}

	/**
	 * @param $token
	 * @param $token_secret
	 *
	 * @return void
	 */
	public function setToken($token, $token_secret)
	{
		$this->baseSDK->setToken($token, $token_secret);
	}

	/**
	 * @return array
	 */
	public function getToken()
	{
		return $this->baseSDK->getToken();
	}
}