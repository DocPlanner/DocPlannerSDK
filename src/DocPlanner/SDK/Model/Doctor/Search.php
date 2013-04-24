<?php
/**
 * Author: Łukasz Barulski
 * Date: 24.04.13 16:31
 */
namespace DocPlanner\SDK\Model\Doctor;

use DocPlanner\SDK\Base\Result;

class Search extends Result
{
	public $test;
	public $id;
	public $name;
	public $surname;
	public $doctor_url;
	public $picture;
	public $picture_big;
	public $picture_default;
	public $rating;
	public $verified;
	public $opinionCount;
	/**
	 * @var array
	 */
	public $categories = [];
	/**
	 * @var array
	 */
	public $address = [];
	/**
	 * @var array
	 */
	public $visits = [];
}