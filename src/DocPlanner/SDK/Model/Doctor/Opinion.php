<?php
/**
 * Author: Łukasz Barulski
 * Date: 24.04.13 16:31
 */
namespace DocPlanner\SDK\Model\Doctor;

use DocPlanner\SDK\Base\Result;

class Opinion extends Result
{
	public $signature;
	public $date;
	public $comment;
	public $user_pic;
	public $rate;
}