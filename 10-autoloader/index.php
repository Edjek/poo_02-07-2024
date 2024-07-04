<?php

require_once './Utils/Autoloader.php';

use App\Entity\Bd;
use App\Utils\Autoloader;

Autoloader::autoload();

$description = "Dans Tintin en Amérique (1932), Tintin confirme sa vocation de redresseur de torts en s'opposant à Al Capone et aux gangsters de Chicago.";

$tintin = new Bd('Tintin en Amérique', $description, '', '');
echo $tintin->getNom();
