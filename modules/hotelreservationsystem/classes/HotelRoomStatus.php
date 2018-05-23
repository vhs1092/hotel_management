<?php
class HotelRoomStatus extends ObjectModel
{
	public $id;
	public $status;

	public static $definition = array(
		'table' => 'htl_room_status',
		'primary' => 'id',
		'fields' => array(
			'status' =>	array('type' => self::TYPE_STRING),
		),
	);

	/**
	 * [getAllRoomStatus :: To get all possible Room statuses]
	 * @return [array|boolean] [if data found Returns array containing all possible statuses of the rooms else returns false]
	 */
	public function getAllRoomStatus()
	{
		$sql = "SELECT * FROM `"._DB_PREFIX_."htl_room_status`";
		$rm_status = Db::getInstance()->executeS($sql);

		if ($rm_status) 
			return $rm_status;
		else
			return false;
	}
}