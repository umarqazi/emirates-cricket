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
        $params['dob'] = Carbon::parse($params['dob'])->format('Y-m-d');
        $player = $this->player_repo->store(Player::class, $params);
        if(!empty($player)) {
            /* Move file to storage path */
            $old_path = 'uploads/temp/'.$player->photo;
            $new_path = 'uploads/players/'.$player->id.'/';

            if (!Storage::disk('public')->exists($new_path)) {
                Storage::disk('public')->makeDirectory($new_path);
            }

            Storage::disk('public')->move($old_path, $new_path.$player->photo);
            return true;
        }
    }

    public function delete($id) {
        $name = $this->player_repo->find(Player::class, $id)->photo;
        $result = $this->player_repo->destroy(Player::class, $id);
        if ($result) {
            Storage::deleteDirectory('uploads/players/'.$id.$name);
        }
        return true;
    }
}
