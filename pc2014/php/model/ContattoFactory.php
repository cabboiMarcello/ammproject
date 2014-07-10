<?php
include_once 'Contatto.php';
include_once 'Db.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class ContattoFactory{
    
    public static function cercaContatto($usd, $psd){
        $msqli = Db::getInstance()->connectDb();
        
        //gestire errore
        
        $query = "  select id, nome, cognome, indirizzo, budget, username, password
                    from contatti where username=? and password = ?";
        
        $stmt = $msqli->stmt_init();
        $stmt->prepare($query);
        // gestire errore
        
        $stmt->bind_param("ss", $usd, $psd);
        // gestire errore
        
        
        $stmt->execute();
        // gestire errore
        
        $stmt->bind_result($id, $nome, $cognome, $indirizzo, $budget, $username, $password);
        // gestire errore
        
        while($stmt->fetch()){
            // assumiamo che il ciclo venga eseguito una volta sola
            $contatto = new Contatto();
            $contatto->setId($id);
            $contatto->setNome($nome);
            $contatto->setCognome($cognome);
            $contatto->setIndirizzo($indirizzo);
            $contatto->setBudget($budget);
            $contatto->setUsername($username);
            $contatto->setPassword($password);
            return $contatto;
        }
        
        return null;
        
    }
    
    public static function cercaContattoPerID($id){
        $msqli = Db::getInstance()->connectDb();
        
        //gestire errore
        
        $query = "  select id, nome, cognome, indirizzo, budget, username, password
                    from contatti where id=?";
        
        $stmt = $msqli->stmt_init();
        $stmt->prepare($query);
        // gestire errore
        
        $stmt->bind_param("i", $id);
        // gestire errore
        
        
        $stmt->execute();
        // gestire errore
        
        $stmt->bind_result($id, $nome, $cognome, $indirizzo, $budget, $username, $password);
        // gestire errore
        
        while($stmt->fetch()){
            // assumiamo che il ciclo venga eseguito una volta sola
            $contatto = new Contatto();
            $contatto->setId($id);
            $contatto->setNome($nome);
            $contatto->setCognome($cognome);
            $contatto->setIndirizzo($indirizzo);
            $contatto->setBudget($budget);
            $contatto->setUsername($username);
            $contatto->setPassword($password);
            return $contatto;
        }
        
        return null;
        
    }
}
?>
