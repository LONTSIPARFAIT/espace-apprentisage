<?php 
$prenom = 'Perfect';

function direSalut($prenom) {
    return "Salut " . $prenom . " !";
}

echo direSalut($prenom);

$amis = ['Jean', 'Sarah', 'Ali'];

// pour ajouter un new element au tableau
$amis[] = 'Julien';

//  pour recuperer les element du tableaux
echo $amis[1];
// affiche 'Sarah'

// recupere un elemnent et son premmier element
echo $amis[0][1];
// affiche 'e'

$cadeaux = ["Vélo", "Console", "Livre"];

foreach ($cadeaux as $cadeau) {
    echo "Je veut un(e)" . $cadeau . '/n';
}