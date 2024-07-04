<?php

require_once './Abstract/Vehicule.php';
require_once './Utilitaire/Engine.php';
require_once './Entity/Renault.php';
require_once './Entity/Peugeot.php';
require_once './Entity/User.php';

use App\Entity\Peugeot;
use App\Entity\Renault;
use App\Entity\User;


$peugeot = new Peugeot();
$renault = new Renault();
$rachid = new User();

echo $renault->demarrer();
echo '<br>';
echo $renault->carburant();
echo '<br>';
echo 'nombre de test : '. $renault->nbTest();
echo '<br>';

$rachid->setPseudo('Ryad');
echo $peugeot->start($rachid);
echo '<br>';
echo $renault->start($rachid);
echo '<br>';


echo $peugeot->demarrer();
echo '<br>';
echo $peugeot->carburant();
echo '<br>';
echo 'nombre de test : '. $peugeot->nbTest();
echo '<br>';

echo $renault->getCrash($rachid, true);
