<?php
/**
 * Author: Łukasz Barulski
 * Date: 24.04.13 16:31
 */
namespace DocPlanner\SDK\Model\User;

/**
 * Class RequestAccess
 * @package DocPlanner\SDK\Model\User
 */
class RequestAccess extends Register
{
	public $have_calendar;
	public $is_commercial;
}