<?php
/**
 * Author: Łukasz Barulski
 * Date: 24.04.13 16:31
 */
namespace DocPlanner\SDK\Model\User;

use DocPlanner\SDK\Base\Result;

class Register extends Result
{
	public $name;
	public $surname;
	public $email;
	/**
	 * @var Result
	 */
	public $access_token = [];
}