<?php

// Struttura dati per popolare la vista generica master.php

class ViewDescriptor {

// CENTRALBAR 

    private $centralBar_file;        //  File che include la definizione HTML della sidebar centrale

    // La funzione getCentralBarFile restituisce il path al file che include la definizione HTML della sidebar centrale

    public function getCentralBarFile() {
        return $this->centralBar_file;
    }

    // La funzione setCentralBarFile imposta il path al file che include la definizione HTML della sidebar centrale

    public function setCentralBarFile($centralBar) {
        $this->centralBar_file = $centralBar;
    }

// LEFTBAR

    private $leftBar_file;        //  File che include la definizione HTML della sidebar sinistra

    // La funzione getLeftBarFile restituisce il path al file che include la definizione HTML della sidebar sinistra

    public function getLeftBarFile() {
        return $this->leftBar_file;
    }

    // La funzione setLeftBarFile imposta il path al file che include la definizione HTML della sidebar sinistra

    public function setLeftBarFile($leftBar) {
        $this->leftBar_file = $leftBar;
    }

// UPRIGHTBAR

    private $uprightBar_file;       //  File che include la definizione HTML della sidebar alto-destra

    // La funzione getUpRightBarFile imposta il file che include la definizione HTML della sidebar alto-destra

    public function getUpRightBarFile() {
        return $this->uprightBar_file;
    }

    // La funzione setRightBarFile imposta il path al file che include la definizione HTML della sidebar alto-destra

    public function setUpRightBarFile($uprightBar) {
        $this->uprightBar_file = $uprightBar;
    }

// CONTENUTO PRINCIPALE

    private $content_file;        // File che include la definizione HTML del contenuto principale

    // La funzione setContentFile imposta il file che include la definizione HTML del contenuto principale

    public function setContentFile($contentFile) {
        $this->content_file = $contentFile;
    }

    // La funzione getContentFile restituisce il path al file che contiene il contenuto principale

    public function getContentFile() {
        return $this->content_file;
    }

// FINE DELLA CLASSE ViewDescriptor
}
?>  
