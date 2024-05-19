<?php
//fonction utiliser pour inclure les fichiers php
include_once "controls/operation.php";

$connexion = connectToDB();
$sql = "CREATE TABLE IF NOT EXISTS admin_table(id INT AUTO_INCREMENT PRIMARY KEY,nom VARCHAR(225) NOT NULL,
prenoms VARCHAR(225) NOT NULL,email VARCHAR(225) NOT NULL,telephone VARCHAR(222)NOT NULL,
sexe VARCHAR(22) NOT NULL,mdp VARCHAR(225) NOT NULL,
creatAT TIMESTAMP default CURRENT_TIMESTAMP,
updatAt TIMESTAMP default CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP);
";

try {
    $connexion->exec($sql);
    echo "table creer avec succès:";
} catch (PDOException $e) {
    echo "Error <br>" . $e->getMessage();
}
$sql = "INSERT INTO admin_table(nom,prenoms,email,telephone,sexe,mdp) VALUES(?,?,?,?,?,?)";
$req = $connexion->prepare($sql);
try {
    $req->execute(["Okere", "Rafiatou", "okererafiatou@gmail.com", "68701879", "F", md5("1234")]);
    echo "<br> Super Admin céer avec succès";
} catch (PDOException $e) {
    echo "Error !<br>" . $e->getMessage();
}
