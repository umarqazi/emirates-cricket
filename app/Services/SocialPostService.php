<?php


namespace App\Services;


use App\Repos\SocialPostRepo;
use App\SocialPost;

class SocialPostService
{
    public $social_post_repo;

    public function __construct()
    {
        $this->social_post_repo = new SocialPostRepo();
    }

    public function getOne($id)
    {
        $where = array('social_account_id' => $id);
        return $this->social_post_repo->getOne(SocialPost::class, $where, 'created_at' , 'asc');
    }

    public function storeLattestPosts($data, $id)
    {
        /* First Delete Older Posts from DB */
        $this->deleteOldPosts($id);

        foreach ($data as $item) {
            $post = new SocialPost();
            $post->data = json_encode($item);
            $post->social_account_id = $id;
            $post->save();
        }
        return true;
    }

    private function deleteOldPosts($id)
    {
        return SocialPost::where('social_account_id', $id)->delete();
    }

}
