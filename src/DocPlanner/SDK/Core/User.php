<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;
use DocPlanner\SDK\Base\Parameter;

class User extends CoreBase
{
	/**
	 * @param string $email
	 * @param string $password
	 *
	 * @return bool
	 */
	public function login($email, $password)
	{
		$this->parameter->add(['email' => $email, 'pass' => $password]);
		$result = $this->baseSDK->execute('UserRequestAccess', $this->parameter);
		$this->baseSDK->setToken($result['access_token']['access_token'], $result['access_token']['access_token_secret']);
		return $result;
	}
}