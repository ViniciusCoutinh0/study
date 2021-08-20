<?php 

namespace App\Career;

class History
{
    private $lines = [];

    public function timeLine(Player $player, string $team, string $date)
    {
        $this->lines[] = [
            'Player' => $player,
            'Team' => $team,
            'date' => $date
        ];
    }

    public function getTimeLine()
    {
        return $this->lines;
    }
}