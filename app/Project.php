<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $guarded = ['id','_token'];

    /**
     * @param $query
     * @param $userId
     * @return mixed
     */
    public function scopeCreatedBy($query,$userId)
    {
        return $query->where('created_by',$userId);
    }
}
