<?php

$projets = [
    [
        'id' => 1,
        'titre' => 'peerIQ',
        'image' => 'images/project-peeriq-accueil.png',
        'description' => "Plateforme sociale que je développe en ce moment : profils, messages privés, appels vocaux et jeux de groupe en live. C'est le projet qui m'a le plus appris, du premier écran jusqu'à la mise en ligne.",
    ],
    [
        'id' => 2,
        'titre' => 'Kiosque',
        'image' => 'images/project-kiosque-accueil.png',
        'description' => "Site vitrine d'un café de quartier, réalisé en HTML et CSS uniquement. La page d'accueil s'adapte au téléphone comme à l'écran d'ordinateur, sans framework.",
        
    ],
    [
        'id' => 3,
        'titre' => 'Taskly',
        'image' => 'images/project-taskly-accueil.png',
        'description' => "Application de tâches écrite en JavaScript : on ajoute des tâches, on les coche, et une barre de progression montre l'avancement de la semaine. Les données restent enregistrées dans le navigateur.",
    
    ],
];

require 'index-template.php';
