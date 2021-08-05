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

    public function all() {
        return $this->employee_repo->all(Employee::class);
    }

    public function paginatedRecords() {
        return $this->employee_repo->paginatedRecords(Employee::class, 2);
    }

    public function find($id) {
        return $this->employee_repo->find(Employee::class, $id);
    }
    public function findOne($id) {
        return $this->employee_repo->findOne(Employee::class, $id);
    }

    public function store($params)
    {
        $image = $params['image'];
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('storage/uploads/employees/'), $new_name);
        $params['image'] = $new_name;
        return $this->employee_repo->store(Employee::class, $params);
    }

    public function update($params, $id): bool
    {
        if (isset($params['image'])){
            $image = $params['image'];
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/uploads/employees/') , $image_name);
            $params['image'] = $image_name;
        }
        return $this->employee_repo->update(Employee::class, $params, $id);
    }

    public function delete($id): bool
    {
        return $this->employee_repo->destroy(Employee::class, $id);
    }
}
