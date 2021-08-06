<?php


namespace App\Repos;


use App\Player;

class PlayerRepo extends BaseRepo
{
    private $Model = Player::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }

    public function bulkAction($request)
    {
        $selected_array = isset($request['selected']) ? $request['selected'] : array();
        if (empty($selected_array)) {
            return 0;
        }
        if ($request['type'] == 2) {
            return $this->_model::whereIn('id', $selected_array)->delete();
        }
        return $this->_model::whereIn('id', $selected_array)->update(['status' => $request['type']]);
    }
}
