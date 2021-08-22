<?php

use App\Career\Player;
use App\Career\History;

try
{
    require __DIR__ . '/vendor/autoload.php';

    $player = new Player([
        "name"          => 'Vinicius',
        "lastname"      => 'Coutinho',
        "nacionality"   => 'Brazil',
        "uniformName"   => 'COUTINHO',
        "uniformNumber" => 9,
        "birthYear"     => 1997,
        "birthMonth"    => 10,
        "birthDay"      => 16
    ]);
    
    $player->setAttributes([
        "height"      => 197,
        "weight"      => 70,
        "position"    => 'ATA',
        "function"    => 'ATA',
        "styleOfGame" => 'Creator',
        "goodLeg"     => 'Rigth'
    ]);

    $player->setState([
        "games"      => 186,
        "goals"      => 193,
        "assists"    => 90,
        "bruise"     => false,
        "suspencion" => false
    ]);
    
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
}
catch (Exception $e)
{
    echo $e->getMessage();
} 