<?php

require_once './Utilitaire/Autoloader.php';

use App\Entity\Peugeot;
use App\Entity\Renault;
use App\Entity\User;
use App\Utilitaire\Autoloader;

Autoloader::autoload();

$peugeot = new Peugeot();
$renault = new Renault();
$rachid = new User();

echo $renault->demarrer() . '<br>';
echo $renault->carburant() . '<br>';
echo 'nombre de test : '. $renault->nbTest() . '<br>';

$rachid->setPseudo('Ryad');
echo $peugeot->start($rachid) . '<br>';
echo $renault->start($rachid) . '<br>';
echo $peugeot->demarrer() . '<br>';
echo $peugeot->carburant() . '<br>';
echo 'nombre de test : '. $peugeot->nbTest() . '<br>';

echo $renault->getCrash($rachid, true) . '<br>';
