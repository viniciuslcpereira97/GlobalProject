<?php

namespace DevFinder\Projects;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    protected $fillable = [
        'description',
        'owner_id',
    ];

}
