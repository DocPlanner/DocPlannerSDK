<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;
use DocPlanner\SDK\Base\Result;

class User extends CoreBase
{
	/**
	 * @param string $email
	 * @param string $pass
	 *
	 * @return \DocPlanner\SDK\Model\User\Register
	 */
	public function register($email, $pass)
	{
		$this->parameter->add(['email' => $email, 'pass' => $pass]);
		$result = $this->baseSDK->execute('user.register', $this->parameter);
		$this->baseSDK->setToken($result->access_token->access_token, $result->access_token->access_token_secret);
		return $result;
	}

	/**
	 * @param null|string $email
	 * @param null|string $pass
	 * @param null|string $fb_access
	 *
	 * @return \DocPlanner\SDK\Model\User\RequestAccess
	 */
	public function requestAccess($email = null, $pass = null, $fb_access = null)
	{
		$this->parameter->add(['email' => $email, 'pass' => $pass, 'fb_access' => $fb_access]);
		$result = $this->baseSDK->execute('user.requestAccess', $this->parameter);
		$this->baseSDK->setToken($result->access_token->access_token, $result->access_token->access_token_secret);
		return $result;
	}

	/**
	 * @param null|float $lat
	 * @param null|float $lon
	 * @param null|int   $page
	 *
	 * @return \DocPlanner\SDK\Model\User\Favorites
	 */
	public function favorites($lat = null, $lon = null, $page = null)
	{
		$this->parameter->add(['lat' => $lat, 'lon' => $lon, 'page' => $page]);
		$result = $this->baseSDK->execute('user.favorites', $this->parameter);
		return $result;
	}

	/**
	 * @param string $name
	 * @param string $surname
	 * @param string $phone
	 *
	 * @return \DocPlanner\SDK\Model\User\ValidatePhone
	 */
	public function validatePhone($name, $surname, $phone)
	{
		$this->parameter->add(['name' => $name, 'surname' => $surname, 'phone' => $phone]);
		$result = $this->baseSDK->execute('user.validatePhone', $this->parameter);
		return $result;
	}

	/**
	 * @param string $name
	 * @param string $surname
	 * @param string $email
	 * @param string $phone
	 *
	 * @return \DocPlanner\SDK\Model\User\CreateWithPhone
	 */
	public function createWithPhone($name, $surname, $email, $phone)
	{
		$this->parameter->add(['name' => $name, 'surname' => $surname, 'email' => $email, 'phone' => $phone]);
		$result = $this->baseSDK->execute('user.createWithPhone', $this->parameter);
		return $result;
	}

	/**
	 * @param string $process_id
	 * @param string $password
	 *
	 * @return \DocPlanner\SDK\Model\User\ConfirmPhone
	 */
	public function confirmPhone($process_id, $password)
	{
		$this->parameter->add(['process_id' => $process_id, 'password' => $password]);
		$result = $this->baseSDK->execute('user.confirmPhone', $this->parameter);
		$this->baseSDK->setToken($result->access_token->access_token, $result->access_token->access_token_secret);
		return $result;
	}

	/**
	 * @param int $doctor_id
	 *
	 * @return \DocPlanner\SDK\Model\User\RemoveOpinion
	 */
	public function removeOpinion($doctor_id)
	{
		$this->parameter->add(['doctor_id' => $doctor_id]);
		$result = $this->baseSDK->execute('user.removeOpinion', $this->parameter);
		return $result;
	}

	/**
	 * @return \DocPlanner\SDK\Model\User\RelatedDoctors
	 */
	public function relatedDoctors()
	{
		$result = $this->baseSDK->execute('user.relatedDoctors');
		return $result;
	}

	/**
	 * @return \DocPlanner\SDK\Model\User\GetSignature[]
	 */
	public function getSignature()
	{
		$result = $this->baseSDK->execute('user.getSignature');
		return $result;
	}

	/**
	 * @param string $signature
	 *
	 * @return \DocPlanner\SDK\Model\User\AddSignature
	 */
	public function addSignature($signature)
	{
		$this->parameter->add(['signature' => $signature]);
		$result = $this->baseSDK->execute('user.addSignature', $this->parameter);
		return $result;
	}


}