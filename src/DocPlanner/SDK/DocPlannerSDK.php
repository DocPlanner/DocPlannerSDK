<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:37
 */
namespace DocPlanner\SDK;

use DocPlanner\SDK\Base\BaseSDK;
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
	 * @param string $consumerKey
	 * @param string $consumerSecret
	 */
	public function __construct($consumerKey, $consumerSecret)
	{
		$this->baseSDK = new BaseSDK($consumerKey, $consumerSecret);
	}

	/**
	 * @return Doctor
	 */
	public function doctor()
	{
		if (null === $this->doctor)
		{
			$this->doctor = new Doctor($this->baseSDK);
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
			$this->user = new User($this->baseSDK);
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
			$this->visit = new Visit($this->baseSDK);
		}
		return $this->visit;
	}

}