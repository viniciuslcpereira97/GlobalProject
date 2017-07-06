<?php

namespace DevFinder\Projects;

use DevFinder\Projects\Project;
use DevFinder\Repositories\BaseRepository;

/*
|--------------------------------------------------------------------------
| Title
|--------------------------------------------------------------------------
|
| comment
|
*/

class ProjectsRepository extends BaseRepository{

    /**
     * Construct class dependencies
     * @param Project $projects [description]
     */
    public function __construct()
    {
        $this->singleton(new Project);
    }

}