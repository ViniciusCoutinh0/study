<?php

use App\SandBox\PlayerOne;

require __DIR__ . '/vendor/autoload.php';

use App\Career\Player;
use App\Career\Attribute;
use App\Career\State;

$player = new Player();
$player->name = 'Vinicius';
$player->lastname = 'Coutinho';
$player->nacionality = 'Brazil';
$player->uniformName = 'COUTINHO';
$player->uniformNumber = 9;
$player->birthYear = 1997;
$player->birthMonth = 10;
$player->birthDay = 16;

$attribute = new Attribute();
$attribute->height = 197;
$attribute->weight = 70;
$attribute->position = 'ATA';
$attribute->function = 'ATA';
$attribute->styleOfGame = 'Creator';
$attribute->goodLeg = 'Rigth';

$state = new State;
$state->games = 186;
$state->goals = 193;
$state->assists = 90;
$state->bruise = false;
$state->suspencion = false;

$player->setAttributes($attribute);
$player->setState($state);

echo '<pre>';
var_dump($player);
