<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;
use DocPlanner\SDK\Base\Result;

/**
 * Class Doctor
 *
 * @package DocPlanner\SDK\Core
 */
class Doctor extends CoreBase
{
	/**
	 * @return Result|\DocPlanner\SDK\Model\Doctor\Categories[]|array
	 */
	public function categories()
	{
		$result = $this->baseSDK->execute('doctor.categories');
		return $result;
	}

	/**
	 * @param int $doctor_id
	 *
	 * @return Result|\DocPlanner\SDK\Model\Doctor\Calendars[]|array
	 */
	public function calendars($doctor_id)
	{
		$this->parameter->add(['doctor_id' => $doctor_id]);
		$result = $this->baseSDK->execute('doctor.calendars', $this->parameter);
		return $result;
	}

	/**
	 * @param null|string $phrase
	 * @param null|string $location
	 * @param null|int    $category_id
	 * @param null|string $mode
	 * @param null|float  $lat
	 * @param null|float  $lon
	 * @param null|int    $page
	 *
	 * @return Result|\DocPlanner\SDK\Model\Doctor\Search[]|array
	 */
	public function search($phrase = null, $location = null, $category_id = null, $mode = null, $lat = null, $lon = null, $page = null)
	{
		$this->parameter->add([
			'phrase'      => $phrase,
			'location'    => $location,
			'category_id' => $category_id,
			'mode'        => $mode,
			'lat'         => $lat,
			'lon'         => $lon,
			'page'        => $page
		]);
		$result = $this->baseSDK->execute('doctor.search', $this->parameter);
		return $result;
	}

	/**
	 * @param int        $doctor_id
	 * @param null|float $lat
	 * @param null|float $lon
	 *
	 * @return \DocPlanner\SDK\Model\Doctor\Profile|array
	 */
	public function profile($doctor_id, $lat = null, $lon = null)
	{
		$this->parameter->add(['doctor_id' => $doctor_id, 'lat' => $lat, 'lon' => $lon]);
		$result = $this->baseSDK->execute('doctor.profile', $this->parameter);
		return $result;
	}

	/**
	 * @param int      $doctor_id
	 * @param null|int $page
	 *
	 * @return Result|\DocPlanner\SDK\Model\Doctor\Opinion[]|array
	 */
	public function opinion($doctor_id, $page = null)
	{
		$this->parameter->add(['doctor_id' => $doctor_id, 'page' => $page]);
		$result = $this->baseSDK->execute('doctor.opinion', $this->parameter);
		return $result;
	}

	/**
	 * @param int $doctor_id
	 *
	 * @return \DocPlanner\SDK\Model\Doctor\CanAddOpinion|array
	 */
	public function canAddOpinion($doctor_id)
	{
		$this->parameter->add(['doctor_id' => $doctor_id]);
		$result = $this->baseSDK->execute('doctor.canAddOpinion', $this->parameter);
		return $result;
	}

	/**
	 * @param int    $doctor_id
	 * @param string $comment
	 * @param float  $rate
	 * @param int    $duration
	 * @param string $device
	 *
	 * @return \DocPlanner\SDK\Model\Doctor\AddOpinion|array
	 */
	public function addOpinion($doctor_id, $comment, $rate, $duration, $device)
	{
		$this->parameter->add([
			'doctor_id' => $doctor_id,
			'comment'   => $comment,
			'rate'      => $rate,
			'duration'  => $duration,
			'device'    => $device
		]);
		$result = $this->baseSDK->execute('doctor.addOpinion', $this->parameter);
		return $result;
	}
}