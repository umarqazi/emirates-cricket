<?php


namespace App\Services;


use App\Employee;
use App\Repos\EmployeeRepo;

class EmployeeService
{
    public $employee_repo;

    public function __construct()
    {
        $this->employee_repo = new EmployeeRepo();
    }

    public function all()
    {
        return $this->employee_repo->all('id', 'asc');
    }

    public function paginatedRecords()
    {
        return $this->employee_repo->paginatedRecords(2);
    }

    public function find($id)
    {
        return $this->employee_repo->find($id);
    }

    public function findOne($id)
    {
        return $this->employee_repo->findOne($id);
    }

    public function store($params)
    {
        $image = $params['image'];
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/uploads/employees/'), $new_name);
        $params['image'] = $new_name;
        return $this->employee_repo->store($params);
    }

    public function update($params, $id): bool
    {
        if (isset($params['image'])) {
            $image = $params['image'];
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/uploads/employees/'), $image_name);
            $params['image'] = $image_name;
        }
        return $this->employee_repo->update($params, $id);
    }

    public function delete($id): bool
    {
        return $this->employee_repo->destroy($id);
    }
}
