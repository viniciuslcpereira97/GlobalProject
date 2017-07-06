<?php

namespace DevFinder\Repositories;

/*
|--------------------------------------------------------------------------
| Repository Interface
|--------------------------------------------------------------------------
|
| All repositories must to implement this interface
|
*/

interface RepositoryInterface {

    /**
     * [all description]
     * @return [type] [description]
     */
    public function all();
    
    /**
     * [byId description]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function byId($id);

} 