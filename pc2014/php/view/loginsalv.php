<?php
if (isset($errore)) {
    ?>
    <div><?= $errore ?></div>
    <?php
}
?>
<form action="index.php?page=login" method="post">
    <label for="user">Nome utente</label>
    <input id="user" type="text" name="user" /><br/>
    <label for="user">Password</label>
    <input id="psw" type="password" name="psw" /><br/>
    <button type="submit" name="cmd" value="login">Login</button>
    <button type="submit" name="cmd" value="esci">Esci</button>
</form>
