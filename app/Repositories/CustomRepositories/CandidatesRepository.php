<?php

namespace DevFinder\Repositories\CustomRepositories;

use DevFinder\Candidate;
use DevFinder\Repositories\BaseRepository;

class CandidatesRepository extends BaseRepository
{

    /**
     * List all candidates by email
     * @param  [type] $email [description]
     * @return [type]        [description]
     */
    public function byEmail($email)
    {
        return $this->model->whereEmail($email)->get();
    }

    /**
     * List all candidates by age
     * @param  [type] $age [description]
     * @return [type]      [description]
     */
    public function byAge($age)
    {
        return $this->model->whereAge($age)->get();
    }

    /**
     * List all candidates where age is between two values
     * @param  Array  $ages [description]
     * @return [type]       [description]
     */
    public function ageBetween(Array $ages)
    {
        return $this->model->whereBetween('age', $ages)->get();
    }

}
