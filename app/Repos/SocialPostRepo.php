<?php


namespace App\Repos;


use App\SocialPost;

class SocialPostRepo extends BaseRepo
{
    private $Model = SocialPost::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }

    public function getRecent($where, $count, $column, $order)
    {
        return $this->_model::where($where)->orderBy($column, $order)->take($count)->get();
    }
}
