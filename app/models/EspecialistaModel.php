<?php

namespace app\models;

use \DataBase;
use \Model;

class EspecialistaModel extends Model
{
    protected $table = "especialista";
    protected $primaryKey = "id";

    public static function getAllEspecialistas()
    {
        $model = new static();
        $sql = "SELECT * FROM " . $model->table;
        $result = DataBase::query($sql);

        return $result;
    }
}
