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
}
