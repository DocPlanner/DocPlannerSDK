<?php
/**
 * Author: Łukasz Barulski
 * Date: 23.04.13 17:44
 */
namespace DocPlanner\SDK\Core;

use DocPlanner\SDK\Base\CoreBase;
use DocPlanner\SDK\Base\Result;

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
	 * @return \DocPlanner\SDK\Model\Visit\Book
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
	 * @param int $visit_id
	 *
	 * @return \DocPlanner\SDK\Model\Visit\Cancel
	 */
	public function cancel($visit_id)
	{
		$this->parameter->add(['visit_id' => $visit_id]);
		$result = $this->baseSDK->execute('visit.cancel', $this->parameter);
		return $result;
	}
}