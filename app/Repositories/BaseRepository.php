<?php

namespace DevFinder\Repositories;

use DevFinder\Repositories\RepositoryInterface;

/*
|--------------------------------------------------------------------------
| BaseRepository Class
|--------------------------------------------------------------------------
|
| Base repository class for all another repository class
|
*/

class BaseRepository implements RepositoryInterface {

    /**
     * Model initializer
     * @var [Model]
     */
    protected $model;

    /**
     * Object singleton
     * @param [Model] $model
     */
    public function singleton($model)
    {
        $this->model = new $model;
    }
    
    /**
     * All models
     * @return [Collection]
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * All models by Id
     * @param  [Integer] $id
     * @return [Model]
     */
    public function byId($id)
    {
        return $this->model->find($id);
    }

}