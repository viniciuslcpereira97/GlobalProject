<?php

namespace DevFinder\Repositories;

use DevFinder\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model as BaseModel;

/*
|--------------------------------------------------------------------------
| BaseRepository Class
|--------------------------------------------------------------------------
|
| Base repository class for all another repository class
| Abstract Class. You cannot instatiate this class!
| This class implements Repository Interface, don't forget to overwrite methods
|
*/

abstract class BaseRepository implements RepositoryInterface {

    /**
     * Model initializer
     * @var [Model]
     */
    protected $model;

    /**
     * [__construct description]
     */
    function __construct(BaseModel $model)
    {
        $this->model = $model;
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