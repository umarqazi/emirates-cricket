<?php


namespace App\Repos;


use Illuminate\Database\Eloquent\Model;

class BaseRepo implements IRepo
{
    /**
     * @var Model
     */
    protected $_model;

    public function __construct($model)
    {
        $this->_model = new $model;
    }

    public function all($column = 'created_at', $order = 'desc')
    {
        return $this->_model->orderBy($column, $order)->get();
    }

    public function first()
    {
        return $this->_model->first();
    }

    public function getOne($where = array(), $column = 'created_at', $order = 'desc')
    {
        return $this->_model->where($where)->orderBy($column, $order)->first();
    }

    public function findByClause(array $clause)
    {
        return $this->_model->where($clause)->get();
    }

    public function paginatedRecords($records, $column = 'created_at', $order = 'desc')
    {
        return $this->_model->orderBy($column, $order)->paginate($records);
    }

    public function getLatestRecords($limit, $where = array(), $column = 'created_at', $order = 'desc')
    {
        return $this->_model->where($where)->orderBy($column, $order)->limit($limit)->get();
    }

    public function groupedBy($groupBy, $column = 'created_at', $order = 'desc')
    {
        return $this->_model->groupBy($groupBy)->orderBy($column, $order)->get();
    }

    public function find($id)
    {
        return $this->_model->find($id);
    }

    public function findOne($id)
    {
        return $this->_model->where('id', $id)->first();
    }

    public function count()
    {
        return $this->_model->count();
    }

    public function findByToken($token)
    {
        return $this->_model->where('token', $token)->first();
    }

    public function store($data)
    {
        return $this->_model->create($data);
    }

    public function update($data, $id)
    {
        return $this->_model->where('id', $id)->update($data);
    }

    public function destroy($id)
    {
        return $this->_model->where('id', $id)->delete();
    }
}
