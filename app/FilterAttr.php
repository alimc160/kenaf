<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class FilterAttr extends Model
{
    protected $guarded = ['id','_token'];
    protected $table ='filters_attr';

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'created_by');
    }

    /**
     * @return BelongsToMany
     */
    public function projectFilters(): BelongsToMany
    {
        return $this->belongsToMany(
            ProjectFilter::class,
            'pivot_project_fltr_fltr_atr_entity',
            'filters_attr_id',
            'project_filters_id'
        )->withTimestamps();
    }
}
