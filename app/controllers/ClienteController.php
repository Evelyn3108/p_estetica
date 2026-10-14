<?php

namespace app\controllers;

use Controller;
use app\models\ServicioModel;
use app\models\TurnoModel;

class ClienteController extends Controller
{
    public function actionServicios()
    {
        $servicios = ServicioModel::getAllServicios();
        include_once 'app/views/cliente/home_servicios.php';
    }

    public function actionDetalle($id = null)
    {
        // $servicio = ServicioModel::findId($id);
        include_once 'app/views/cliente/detalle_servicio.php';
    }

    public function actionMisTurnos()
    {
        // Asumiendo que el ID del cliente logueado está en $_SESSION
        // $turnos = TurnoModel::getByClienteId($_SESSION['id']);
        include_once 'app/views/cliente/perfil_turnos.php';
    }
}
