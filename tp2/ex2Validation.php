<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 24/03/2016
 * Time: 15:14
 */

<?php
include "function.php";

if (!empty($_POST["prenom"])) {
    $_SESSION["user"] = $_POST["prenom"];
    echo $_SESSION["user"];
}

?>