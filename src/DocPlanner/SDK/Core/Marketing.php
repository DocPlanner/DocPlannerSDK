<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;

/**
 * Class Marketing
 * @package DocPlanner\SDK\Core
 */
class Marketing extends CoreBase
{
	/**
	 * @param $phone
	 *
	 * @return \DocPlanner\SDK\Model\Marketing\DoctorRegistration|array
	 */
	public function doctorRegistration($phone)
	{
		$this->parameter->add(['phone' => $phone]);
		$result = $this->baseSDK->execute('marketing.doctorRegistration', $this->parameter);
		return $result;
	}

	/**
	 * @param $doctor_id
	 *
	 * @return \DocPlanner\SDK\Model\Marketing\CreateCalendar|array
	 */
	public function createCalendar($doctor_id)
	{
		$this->parameter->add(['doctor_id' => $doctor_id]);
		$result = $this->baseSDK->execute('marketing.createCalendar', $this->parameter);
		return $result;
	}
}