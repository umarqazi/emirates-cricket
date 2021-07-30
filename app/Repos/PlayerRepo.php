<?php


namespace App\Repos;


use App\Player;

class PlayerRepo extends BaseRepo
{
    public function bulkAction($request)
    {
        $selected_array =  isset($request['selected'])?$request['selected']:array();
        if(empty($selected_array)){
            return 0;
        }
        if($request['type'] == 2){
            return Player::whereIn('id' , $selected_array)->delete();
        }
        return Player::whereIn('id' , $selected_array)->update(['status' => $request['type']]);
    }
}
