<?php

namespace app\models;

use \DataBase;
use \Model;

class ServicioModel extends Model
{
    protected $table = "servicios";
    protected $primaryKey = "id";

    public static function getAllServicios()
    {
        $model = new static();
        $sql = "SELECT * FROM " . $model->table;
        $result = DataBase::query($sql);

        return $result;
    }
}
