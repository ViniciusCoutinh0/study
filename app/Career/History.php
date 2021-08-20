<?php

namespace App\Career;

class History
{
    /**
     * @var array
    */
    private $lines = [];

    /**
     * @param App\Career\Player $player
     * @param string $team
     * @param string $date
     * @return void
    */
    public function timeLine(Player $player, string $team, string $date): void
    {
        $this->lines[] = [
            'Player' => $player,
            'Team' => $team,
            'date' => $date
        ];
    }

    /**
     * @return array
    */
    public function getTimeLine(): array
    {
        return $this->lines;
    }
}
