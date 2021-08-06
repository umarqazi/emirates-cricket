<?php


namespace App\Repos;


use App\Contact;

class ContactRepo extends BaseRepo
{
    private $Model = Contact::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }
}
