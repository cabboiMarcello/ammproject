<?php

// Struttura dati per popolare la vista generica master.php

class ViewDescriptor {

// TITOLO   

    private $titolo;            // Titolo della finestra del browser

    // La funzione getTitolo restituisce il titolo della scheda del browser

    public function getTitolo() {
        return $this->titolo;
    }

    // La funzione imposta il titolo della scheda del browser

    public function setTitolo($titolo) {
        $this->titolo = $titolo;
    }

// LOGO

    private $logo_file;        // File che include la definizione HTML del logo

    // La funzione setLogoFile imposta il file che include la definizione HTML del logo 

    public function setLogoFile($logoFile) {
        $this->logo_file = $logoFile;
    }

    // La funzione getLogoFile restituisce il path al file include la definizione HTML del logo 

    public function getLogoFile() {
        return $this->logo_file;
    }

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

// FOOTER

    private $footer_file;        // File che include la definizione HTML del footer

    // La funzione setFooterFile imposta il file che include la definizione HTML del footer

    public function setFooterFile($footerFile) {
        $this->footer_file = $footerFile;
    }

    // La funzione getFooterFile restituisce il path al file che contiene il footer

    public function getFooterFile() {
        return $this->footer_file;
    }

// MESSAGGIO DI ERRORE

    private $messaggioErrore;     // Messaggio di errore da mostrare dopo un input (nascosto se nullo)

    //La funzione getMessaggioErrore restituisce il testo del messaggio di errore

    public function getMessaggioErrore() {
        return $this->messaggioErrore;
    }

    // La funzione setMessaggioErrore imposta il testo del messaggio di errore

    public function setMessaggioErrore($msg) {
        $this->messaggioErrore = $msg;
    }

// MESSAGGIO DI CONFERMA

    private $messaggioConferma;   // Messaggio di conferma da mostrare dopo un input (nascosto se nullo)

    // La funzione getMessaggioConferma restituisce il contenuto del messaggio di conferma

    public function getMessaggioConferma() {
        return $this->messaggioConferma;
    }

    // La funzione setMessaggioConferma imposta il contenuto del messaggio di conferma

    public function setMessaggioConferma($msg) {
        $this->messaggioConferma = $msg;
    }

// PAGINA DELLA VISTA CORRENTE

    private $pagina;          /* Pagina della vista corrente (le funzionalita' sono divise in tre categorie: 
      venditore, acquirente e visitatore, corrispondenti alle sottocartelle
      di view nel progetto) */

    // La funzione getPagina restituisce il nome della pagina corrente

    public function getPagina() {
        return $this->pagina;
    }

    // la funzione setPagina imposta il nome della pagina corrente

    public function setPagina($pagina) {
        $this->pagina = $pagina;
    }

// FINE DELLA CLASSE ViewDescriptor
}
?>  
