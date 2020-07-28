<?php

namespace App\Services;

use App\Player;
use App\Repos\PlayerRepo;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PlayerService {

    public $player_repo;

    public function __construct()
    {
        $this->player_repo = new PlayerRepo();
    }

    public function all() {
        return $this->player_repo->all(Player::class);
    }

    public function find($id) {
        return $this->player_repo->find(Player::class, $id);
    }

    public function store($params)
    {
        $params['dob'] = Carbon::parse(Carbon::createFromFormat('d/m/Y', $params['dob']))->format('Y-m-d');
        $player = $this->player_repo->store(Player::class, $params);
        if(!empty($player)) {

            /* Move file to storage path */
            $old_path = 'uploads/temp/'.$player->photo;
            $new_path = 'uploads/players/'.$player->id.'/';

            if (!Storage::disk('public')->exists($new_path)) {
                Storage::disk('public')->makeDirectory($new_path);
            }

            Storage::disk('public')->move($old_path, $new_path.$player->photo);
            return $player;
        }
    }

    public function delete($id) {
        $name = $this->player_repo->find(Player::class, $id)->photo;
        $result = $this->player_repo->destroy(Player::class, $id);
        if ($result) {
            File::deleteDirectory(public_path('storage/uploads/players/'.$id.'/'));
        }
        return true;
    }

    public function approveRequest($id): bool
    {
        $this->player_repo->update(Player::class, array('status' => Player::$Approved), $id);
        return true;
    }

    public function declineRequest($id): bool
    {
        $this->player_repo->update(Player::class, array('status' => Player::$Declined), $id);
        return true;
    }
}
