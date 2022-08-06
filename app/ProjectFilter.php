<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectFilter extends Model
{
    protected $guarded = ['id','_token'];
    protected $table = 'project_filters';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function filters()
    {
        return $this->belongsToMany(
            FilterAttr::class,
            'pivot_project_fltr_fltr_atr_entity',
            'project_filters_id',
            'filters_attr_id'
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function entities()
    {
        return $this->belongsToMany(
            Entity::class,
            'pivot_project_fltr_fltr_atr_entity',
            'project_filters_id',
            'entity_id'
        );
    }

    public function project()
    {
        return $this->belongsTo(Project::class,'project_id');
    }
}
