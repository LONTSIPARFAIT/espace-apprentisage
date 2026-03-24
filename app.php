<?php 
$prenom = 'Perfect';

function direSalut($prenom) {
    return "Salut " . $prenom . " !";
}

echo direSalut($prenom);

$amis = ['Jean', 'Sarah', 'Ali'];

// our ajouter un new element au tableau
$amis[] = 'Julien';

echo $amis;