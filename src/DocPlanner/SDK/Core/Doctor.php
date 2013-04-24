<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;

/**
 * Class Doctor
 *
 * @package DocPlanner\SDK\Core
 */
class Doctor extends CoreBase
{
	public function categories()
	{
		return $this->baseSDK->execute('DoctorCategories');
	}

	public function canAddOpinion($doctorId)
	{
		$this->parameter->add(['doctor_id' => $doctorId]);
		return $this->baseSDK->execute('DoctorCanAddOpinion', $this->parameter);
	}
}