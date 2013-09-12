<?php
/**
 * Author: Łukasz Barulski
 * Date: 22.07.13 10:31
 */
namespace DocPlanner\SDK\Model\Visit;
use DocPlanner\SDK\Base\Result;

/**
 * Class Roster
 * @package DocPlanner\SDK\Model\Visit
 */
class Roster extends Result
{
	public $id;
	public $status;

	/**
	 * @var Result
	 */
	public $address = [];

	/**
	 * @var Result
	 */
	public $visits = [];
}