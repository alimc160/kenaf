<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeedLanguage extends Model
{
    protected $guarded = ['id','_token'];

    /**
     * @return BelongsTo
     */
    public function feed(): BelongsTo
    {
        return $this->belongsTo(FeedLanguage::class);
    }
}
