<?php


namespace App\Repos;


use App\Player;

class PlayerRepo extends BaseRepo
{
    public function bulkAction($request)
    {
        if($request['type'] == 2){
            return Player::whereIn('id' , $request['selected'])->delete();
        }
        return Player::whereIn('id' , $request['selected'])->update(['status' => $request['type']]);
    }
}
