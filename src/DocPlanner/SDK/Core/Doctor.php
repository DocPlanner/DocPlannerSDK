<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;
use DocPlanner\SDK\Base\Parameter;

class Doctor extends CoreBase
{
	public function categories()
	{
		return $this->baseSDK->execute('DoctorCategories')['items'];
	}

	public function canAddOpinion($doctorId)
	{
		$params = new Parameter(['doctor_id' => $doctorId]);
		return $this->baseSDK->execute('DoctorCanAddOpinion', $params)['items'];
	}
}