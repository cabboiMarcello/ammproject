<?php

include_once 'model/ContattoFactory.php';
include_once 'model/Contatto.php';

include_once 'controller/BaseController.php';
include_once 'controller/ClienteController.php';


date_default_timezone_set("Europe/Rome");
// punto unico di accesso all'applicazione
FrontController::gestioneRichieste();

//Classe che controlla il punto unico di accesso all'applicazione
class FrontController {

    public static function gestioneRichieste() {

        session_start();     // inizializziamo la sessione
        if (isset($_REQUEST["page"])) {
            $controller = null;
            switch ($_REQUEST["page"]) {
                case "login": {
                       $controller = new BaseController();
                }break;

                case "home": {
                        echo "Home";
                    }break;
                
                case "cliente":{
                    $controller = new ClienteController();
                }break;
            }
            
            if(isset($controller)){
                $controller->handleInput();
            }

        } else {
            echo "File non trovato!";
        }
    }

}

?>
