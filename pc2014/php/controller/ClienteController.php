<?php
include_once basename(__DIR__) . '/../view/ViewDescriptor.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClienteController
 *
 * @author amm
 */
class ClienteController {
    //put your code here
    
    public function handleInput(){
        $vd = new ViewDescriptor();
        
        $vd->setCentralBarFile(basename(__DIR__) . '/../view/home.php');
        
        // richiamo la vista
        require basename(__DIR__) . '/../view/master.php';
    }
}

?>
