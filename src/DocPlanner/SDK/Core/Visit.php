<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;
use DocPlanner\SDK\Base\Result;

/**
 * Class Visit
 * @package DocPlanner\SDK\Core
 */
class Visit extends CoreBase
{
	/**
	 * @param int         $visit_id
	 * @param string|null $name
	 * @param string|null $surname
	 * @param string|null $comment
	 * @param string|null $create_user
	 * @param string|null $phone
	 * @param string|null $verify_phone
	 *
	 * @return \DocPlanner\SDK\Model\Visit\Book|array
	 */
	public function book($visit_id, $name = null, $surname = null, $comment = null, $create_user = null, $phone = null, $verify_phone = null)
	{
		$this->parameter->add([
			'visit_id'     => $visit_id,
			'name'         => $name,
			'surname'      => $surname,
			'comment'      => $comment,
			'create_user'  => $create_user,
			'phone'        => $phone,
			'verify_phone' => $verify_phone
		]);
		$result = $this->baseSDK->execute('visit.book', $this->parameter);
		return $result;
	}

	/**
	 * @param $visit_id
	 *
	 * @return \DocPlanner\SDK\Model\Visit\Details|array
	 */
	public function details($visit_id)
	{
		$this->parameter->add(['visit_id' => $visit_id]);
		$result = $this->baseSDK->execute('visit.details', $this->parameter);
		return $result;
	}

	/**
	 * @param int 		$doctor_id
	 * @param null|int 	$calendar_id
	 * @param null|bool $show_not_booked
	 *
	 * @return Result|\DocPlanner\SDK\Model\Visit\Roster[]|array
	 */
	public function roster($doctor_id, $calendar_id = null, $show_not_booked = null)
	{
		$this->parameter->add([
			'doctor_id'       => $doctor_id,
			'calendar_id'     => $calendar_id,
			'show_not_booked' => $show_not_booked,
		]);
		$result = $this->baseSDK->execute('visit.roster', $this->parameter);
		return $result;
	}

	/**
	 * @param int $visit_id
	 *
	 * @return \DocPlanner\SDK\Model\Visit\Cancel|array
	 */
	public function cancel($visit_id)
	{
		$this->parameter->add(['visit_id' => $visit_id]);
		$result = $this->baseSDK->execute('visit.cancel', $this->parameter);
		return $result;
	}
}