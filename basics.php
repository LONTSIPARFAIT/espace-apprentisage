<?php 
$nom = "Perfecto";
$age = 20;
$estEtudiant = true;
$noteMoyenne = 15.5;

echo "Bonjour, je m'appelle ". $nom . '<br/> ';
echo "J'ai ". $age." ans <br/> ";
echo "Je suis étudiant : " . ($estEtudiant ? 'oui' : 'nm') ."<br/> ";
echo "Ma moyenne est de : ". $noteMoyenne ."/20 <br/> ";

if ($age >= 18) {
    echo "Je suis majeur <br/> ";
} else {
    echo "Je suis mineur <br/> ";
}

// age dans 5 ans
$ageFuture = $age + 5;
echo "J'aurais ".$ageFuture." ans dans 5 ans <br/> ";
