<?php

namespace DevFinder\Repositories;

use Illuminate\Database\Eloquent\Model as BaseModel;

/*
|--------------------------------------------------------------------------
| Repository Interface
|--------------------------------------------------------------------------
|
| All repositories must to implement this interface
|
| Don't forget to overwrite all methods when you 
| implement this interface
|
*/

interface RepositoryInterface {

    /**
     * Class Constructor
     * @param BaseModel $model
     */
    public function __construct(BaseModel $model);

    /**
     * Retrieves all
     * @return Collection
     */
    public function all();
    
    /**
     * Retrieves by id
     * @param  Undefined $id
     * @return Collection
     */
    public function byId($id);

} 