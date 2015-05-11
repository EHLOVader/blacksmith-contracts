<?php namespace Repositories;

use Contracts\Instances\InstanceInterface;
use Contracts\Repositories\RepositoryInterface;

class DbRepository implements RepositoryInterface
{
	
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
    public function update($id, array $array)
    {
       return $this->model->where('id','=',$id)->update($array);
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
    public function delete($id)
    {
        return $this->model->destroy($id);
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
