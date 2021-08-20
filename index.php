<?php

use App\SandBox\PlayerOne;

require __DIR__ . '/vendor/autoload.php';

use App\Career\Player;
use App\Career\Attribute;
use App\Career\State;
use App\Career\History;

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

$history = new History();
$history->timeLine($player, 'Real Madrid', '2020/2021');
$history->timeLine($player, 'Real Madrid', '2021/2022');
$history->timeLine($player, 'Minnesota United', '2021/2022');
$history->timeLine($player, 'Fiorentina', '2022/2023');
$history->timeLine($player, 'Fiorentina', '2024/2025');
$history->timeLine($player, 'Juventos', '2025/2026');
$history->timeLine($player, 'Real Madrid', '2025/2026');
$history->timeLine($player, 'FC Bayern', '2025/2026');
$history->timeLine($player, 'Chelsea', '2026/2027');
echo '<pre>';
dump($player, $history->getTimeLine());
