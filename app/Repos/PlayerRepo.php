<?php


namespace App\Repos;


use App\Player;

class PlayerRepo extends BaseRepo
{
    public function bulkUpdate($request)
    {
        if($request->type == 'delete_all'){
            return Player::whereIn('id' , $request->selected)->delete();
        }
        return Player::whereIn('id' , $request->selected)->update(['status' => $request->type]);
    }
}
