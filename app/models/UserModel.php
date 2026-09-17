<?php

namespace app\models;

use \DataBase;
use \Model;

class UserModel extends Model
{
	protected $table = "usuarios";
	protected $primaryKey = "id_usuario";
	protected $secundaryKey = "email";
	public $email;

	public static function getAllUsers()
	{
		$model = new static();
		$sql = "SELECT * FROM user";
		$result = DataBase::query($sql);

		return $result;
	}
	

}
