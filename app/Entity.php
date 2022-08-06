<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Entity extends Model
{
    protected $guarded = ['id','_token'];

    /**
     * @param $query
     * @param $title
     * @return mixed
     */
    public function scopeTitle($query,$title)
    {
        return $query->where('title',$title);
    }

    /**
     * @return BelongsTo
     */
    public function feed(): BelongsTo
    {
        return $this->belongsTo(Feed::class);
    }

    /**
     * @return BelongsToMany
     */
    public function projectFilters(): BelongsToMany
    {
        return $this->belongsToMany(ProjectFilter::class,'pivot_project_fltr_fltr_atr_entity','entity_id','project_filters_id')->withTimestamps();
    }
}
