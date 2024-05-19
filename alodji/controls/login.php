<?php
include_once "operation.php";
$type = $_POST['type'];
$telephone = $_POST['telephone'];
$mdp = $_POST['passe'];
if ($type == 1) {
    echo "Chauffeur";
} else if ($type == 2) {
    echo "Administrateur";
} else {
    echo "Opérateur";
}
