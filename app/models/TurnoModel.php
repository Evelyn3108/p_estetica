<?php

namespace app\models;

use \DataBase;
use \Model;

class TurnoModel extends Model
{
    protected $table = "turnos";
    protected $primaryKey = "id";

    public static function getAllTurnos()
    {
        $model = new static();
        $sql = "SELECT * FROM " . $model->table;
        $result = DataBase::query($sql);

        return $result;
    }
}
