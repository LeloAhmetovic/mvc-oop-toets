<?php
/**
 * Dit is de base controller waar alle nieuw te maken controllers van erven
 */
class Controller
{
    public function model($model)
    {
        // pad naar modelclass bestand opgegeven
        require_once '../app/models/' . $model . '.php';

        // Nieuw object van de model
        return new $model();
    }

    public function view($view, $data = [])
    {
        if (file_exists('../app/views/' . $view . '.php')) {
            require_once('../app/views/' . $view . '.php');
        } else {
            echo ('view bestaat niet');
        }
    }
}