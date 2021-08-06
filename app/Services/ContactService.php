<?php


namespace App\Services;


use App\Contact;
use App\Repos\ContactRepo;

class ContactService
{
    public $contact_repo;

    public function __construct()
    {
        $this->contact_repo = new ContactRepo();
    }

    public function all()
    {
        return $this->contact_repo->all();
    }

    public function store($params)
    {
        return $this->contact_repo->store($params);
    }

    public function find(int $id)
    {
        return $this->contact_repo->find($id);
    }

    public function update($id, $params)
    {
        return $this->contact_repo->update($params, $id);
    }

    public function delete(int $id)
    {
        return $this->contact_repo->destroy($id);
    }
}
