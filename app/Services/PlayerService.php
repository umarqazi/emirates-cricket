<?php

namespace App\Services;

use App\Player;
use App\Repos\PlayerRepo;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PlayerService
{

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
        $params['passport_expiry'] = Carbon::parse(Carbon::createFromFormat('d/m/Y', $params['passport_expiry']))->format('Y-m-d');
        $player = $this->player_repo->store(Player::class, $params);
        if(!empty($player)) {

            /* Move file to storage path */
            $old_path = 'uploads/temp/'.$player->photo;
            $new_path = 'uploads/players/'.$player->id.'/';

            if (!Storage::disk('public')->exists($new_path)) {
                Storage::disk('public')->makeDirectory($new_path);
            }

            Storage::disk('public')->move($old_path, $new_path.$player->photo);

            if (!empty($params['passport_page'])){
                $data['passport_page'] = $this->fileUpload($params['passport_page'], $new_path);
            }
            if (!empty($params['emirates_id_front'])){
                $data['emirates_id_front'] = $this->fileUpload($params['emirates_id_front'], $new_path);
            }
            if (!empty($params['emirates_id_back'])){
                $data['emirates_id_back'] = $this->fileUpload($params['emirates_id_back'], $new_path);
            }
            if (!empty($params['visa_page'])){
                $data['visa_page'] = $this->fileUpload($params['visa_page'], $new_path);
            }

            $this->player_repo->update(Player::class, $data , $player->id);
            return $player;
        }
    }

    public function update($params, $id)
    {
        $params['dob'] = Carbon::parse(Carbon::createFromFormat('Y-m-d', $params['dob']))->format('Y-m-d');
        $new_path = 'uploads/players/'.$id.'/';
        $data = [
            'first_name' => $params['first_name'],
            'last_name'  => $params['last_name'],
            'email'  => $params['email'],
            'mobile'  => $params['mobile'],
            'living_in'  => $params['living_in'],
            'nationality'  => $params['nationality'],
            'playing_with'  => $params['playing_with'],
            'message'  => $params['message'],
        ];

        if (!empty($params['passport_page'])){
            $data['passport_page'] = $this->fileUpload($params['passport_page'], $new_path);
        }
        if (!empty($params['emirates_id_front'])){
            $data['emirates_id_front'] = $this->fileUpload($params['emirates_id_front'], $new_path);
        }
        if (!empty($params['emirates_id_back'])){
            $data['emirates_id_back'] = $this->fileUpload($params['emirates_id_back'], $new_path);
        }
        if (!empty($params['visa_page'])){
            $data['visa_page'] = $this->fileUpload($params['visa_page'], $new_path);
        }

        return $this->player_repo->update(Player::class, $data, $id);
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

    public function fileUpload($file, $path)
    {
        $extension = $file->getClientOriginalExtension();
        $imageName = time(). uniqid(rand()).'.'.$extension;
        Storage::disk('public')->putFileAs($path, $file, $imageName);
        return $imageName;
    }

    public function bulkAction($request)
    {
        return $this->player_repo->bulkAction($request);
    }
}
