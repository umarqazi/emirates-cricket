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
        return $this->contact_repo->all(Contact::class);
    }

    public function store($params)
    {
        return $this->contact_repo->store(Contact::class, $params);
    }

    public function find(int $id)
    {
        return $this->contact_repo->find(Contact::class, $id);
    }

    public function update($id, $params)
    {
        return $this->contact_repo->update(Contact::class, $params, $id);
    }

    public function delete(int $id)
    {
        return $this->contact_repo->destroy(Contact::class, $id);
    }
}
