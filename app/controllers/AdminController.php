<?php

namespace app\controllers;

use Controller;
use app\models\ServicioModel;
use app\models\TurnoModel;

class AdminController extends Controller
{
    public function actionPanel()
    {
        // Validar si es admin
        $turnos = TurnoModel::getAllTurnos();
        include_once 'app/views/admin/panel_servicios.php';
    }

    public function actionCargarServicio()
    {
        // Validar si es admin
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lógica para guardar un nuevo servicio usando ServicioModel
        }

        include_once 'app/views/admin/cargar_servicio.php';
    }
}
