<?php

namespace app\models;

use \DataBase;
use \Model;

class UserModel extends Model
{
    protected $table = "usuario";
    protected $primaryKey = "id";
    protected $secundaryKey = "email";

    public static function getAllUsers()
    {
        $model = new static();
        $sql = "SELECT * FROM " . $model->table;
        $result = DataBase::query($sql);

        return $result;
    }
}
