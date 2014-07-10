<?php

include_once basename(__DIR__) . '/../view/ViewDescriptor.php';

// Controller che gestisce gli utenti non autenticati, 


class BaseController {

    const user = 'user';

    /**
     * Costruttore
     */
    public function __construct() {
        
    }

    /**
     * Metodo per gestire l'input dell'utente. Le sottoclassi lo sovrascrivono
     * @param type $request la richiesta da gestire
     */
    public function handleInput() {
        // creo il descrittore della vista
        $vd = new ViewDescriptor();


        if (isset($_REQUEST["cmd"])) {
            // qui ci entro se ho premuto un bottone
            switch ($_REQUEST["cmd"]) {

                case "login": {
                        // qui ci entro se ho premuto il bottone login
                        $contatto = ContattoFactory::cercaContatto($_REQUEST["user"], $_REQUEST["psw"]);
                        if ($contatto == null) {
                            $this->showErrorPage($vd);
                        } else {
                            $_SESSION["session_id"] = $contatto->getId();
                            $this->showClientePage($vd);
                        }
                    }break;

                case "esci": {
                        $altoDx = "view/altoDx.php";
                        $contenuto = "view/login.php";
                    }break;
            }
        } else {
            // qui ci arrivo quando non ho premuto nessun bottone
            if (isset($_SESSION['session_id'])) {
                // utente loggato in precedenza
                $contatto = ContattoFactory::cercaContattoPerID($_SESSION['session_id']);
                $this->showClientePage($vd);
            } else {
                $this->showHomePage($vd);
            }
        }

        // richiamo la vista
        require basename(__DIR__) . '/../view/master.php';
    }

    // Imposta la vista master.php per visualizzare la pagina standard

    protected function showStandardPage($vd) {
        // mostro la pagina standard

        $vd->setCentralBarFile(basename(__DIR__) . '/../view/standard/CentralBar.php');
        $vd->setLeftBarFile(basename(__DIR__) . '/../view/standard/LeftBar.php');
        $vd->setUpRightBarFile(basename(__DIR__) . '/../view/standard/UpRightBar.php');
        $vd->setContentFile(basename(__DIR__) . '/../view/standard/Content.php');
    }

    protected function showHomePage($vd) {
        // mostro la pagina standard

        $vd->setCentralBarFile(basename(__DIR__) . '/../view/home/CentralBarFile.php');
        $vd->setLeftBarFile(basename(__DIR__) . '/../view/home/LeftBarFile.php');
        $vd->setUpRightBarFile(basename(__DIR__) . '/../view/home/UpRightBarFile.php');
        $vd->setContentFile(basename(__DIR__) . '/../view/home/ContentBarFile.php');
    }

    protected function showErrorPage($vd) {
        $vd->setCentralBarFile(basename(__DIR__) . '/../view/home/CentralBarFile.php');
        $vd->setLeftBarFile(basename(__DIR__) . '/../view/home/LeftBarFile.php');
        $vd->setUpRightBarFile(basename(__DIR__) . '/../view/home/UpRightBarFile.php');
        $vd->setContentFile(basename(__DIR__) . '/../view/home/ErrorFile.php');
    }

    protected function showClientePage($vd) {
        $vd->setCentralBarFile(basename(__DIR__) . '/../view/home/CentralBarFile.php');
        $vd->setLeftBarFile(basename(__DIR__) . '/../view/home/LeftBarFile.php');
        $vd->setUpRightBarFile(basename(__DIR__) . '/../view/home/UpRightBarFile.php');
        $vd->setContentFile(basename(__DIR__) . '/../view/home/ClienteHome.php');
    }

}

?>
