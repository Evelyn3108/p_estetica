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

    public static function getUserByEmail($email)
    {
        $model = new static();
        $sql = "SELECT * FROM " . $model->table . " WHERE email = :email LIMIT 1";
        $params = ["email" => $email];
        $result = DataBase::getRecord($sql, $params);
        return $result;
    }

    public static function insertUser($nombre, $email, $password, $rol = 'cliente')
    {
        $model = new static();
        $sql = "INSERT INTO " . $model->table . " (nombre, email, password, rol, fecha_alta) VALUES (:nombre, :email, :password, :rol, NOW())";
        $params = [
            "nombre" => $nombre,
            "email" => $email,
            "password" => $password,
            "rol" => $rol
        ];

        return DataBase::execute($sql, $params);
    }
}
