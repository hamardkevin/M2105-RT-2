<?php

include '../functions.php';

if(isset($_POST['browser'])) {
    $_SESSION['browser'] = $_POST['browser'];
}
?>

<form method="post" action="ex3.php">
    <fieldset>
        <fieldset>
            <legend>Quel est votre navigateur favori ?</legend>
            <input name="browser" value="Chrome" type="radio"><label>Chrome</label>
            <input name="browser" value="Firefox" type="radio"><label>Firefox</label>
            <input name="browser" value="Safari" type="radio"><label>Safari</label>
        </fieldset>
        <input type="submit" />
    </fieldset>
</form>

