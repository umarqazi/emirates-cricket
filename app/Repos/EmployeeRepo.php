<?php


namespace App\Repos;


use App\Employee;

class EmployeeRepo extends BaseRepo
{
    private $Model = Employee::class;

    public function __construct()
    {
        parent::__construct($this->Model);
    }

    public function findChairman()
    {
        return $this->_model::where('designation', 'Chairman')->first();
    }

    public function findViceChairman()
    {
        return $this->_model::where('designation', 'Vice-Chairman')->first();
    }

    public function findSecretary()
    {
        return $this->_model::where('designation', 'General Secretary')->first();
    }

    public function findEmployees()
    {
        return $this->_model::where('designation', 'Employee')->get();
    }

    public function findBoardMembers()
    {
        return $this->_model::where('designation', 'Board Member')->get();
    }

    public function findCoOptedMember()
    {
        return $this->_model::where('designation', 'Co-opted Member')->first();
    }
}
