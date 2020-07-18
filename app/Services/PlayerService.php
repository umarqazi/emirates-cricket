<?php

namespace App\Services;

use App\Player;
use App\Repos\PlayerRepo;

class PlayerService {

    public $player_repo;

    public function __construct()
    {
        $this->player_repo = new PlayerRepo();
    }

    public function store($params)
    {
        return $this->player_repo->store(Player::class, $params);
    }
}
