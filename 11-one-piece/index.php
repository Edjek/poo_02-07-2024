<?php

require_once './Utils/Autoloader.php';

use App\Entity\Captain;
use App\Entity\Commander;
use App\Entity\Pirate;
use App\Entity\ViceAdmiral;
use App\Manager\CharacterManager;
use App\Utils\Autoloader;

Autoloader::autoload();

$luffy = new Captain('Monkey D. Luffy Portrait', 19, 15000000000, 'Chapeau de Paille');
$zoro = new Pirate('Roronoa Zoro', 21, 320000000000);
$sengoku = new ViceAdmiral('Sengoku', 60, 0);
$dragon = new Commander('Monkey D. Dragon', 22, 500000000000);
echo $luffy->getInfo() . '<br>';

echo "Equipage : {$luffy->getCrewName()} <br>";

$charactermanager = new CharacterManager();

$charactermanager->addCharacter($luffy);
$charactermanager->addCharacter($zoro);
$charactermanager->addCharacter($sengoku);
$charactermanager->addCharacter($dragon);

$characters = $charactermanager->listCharacters();

echo 'liste des personnages : ';

foreach($characters as $character) {
    echo  '<br>'. $character->getName();
}
