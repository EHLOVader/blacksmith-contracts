<?php namespace App\Repositories;

use App\Contracts\Instances\InstanceInterface;
use App\Contracts\Repositories\RepositoryInterface;

class DbRepository implements RepositoryInterface
{
    
    /**
     * @inheritDoc
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * @inheritDoc
     */
    public function findOrFail($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * @inheritDoc
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * @inheritDoc
     */
    public function create(array $array)
    {
        return $this->model->create($array);
    }

    /**
     * @inheritDoc
     */
    public function delete(InstanceInterface $model)
    {
        return $model->delete();
    }

    /**
     * @inheritDoc
     */
    public function update(InstanceInterface $model)
    {
        return $model->update();
    }

    /**
     * @inheritDoc
     */
    public function save(InstanceInterface $model)
    {
        return $model->save();
    }

    /**
     * @inheritDoc
     */
    public function paginate($count)
    {
        return $this->model->paginate($count);
    }
    
    /**
     * @inheritDoc
     */
    public function orderBy($column, $direction)
    {
        return $this->model->orderBy($column, $direction);
    }
    
    /**
     * @inheritDoc
     */
    public function lists($column, $id)
    {
        return $this->model->lists($column, $id);
    }
}
