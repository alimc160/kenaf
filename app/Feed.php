<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feed extends Model
{
    protected $guarded = ['id','_token'];

    /**
     * @return HasOne
     */
    public function feedLanguage(): HasOne
    {
        return $this->hasOne(FeedLanguage::class);
    }

    public function setSentimentAttribute($value)
    {
        if($value == 'neu'){
            $value = 'neutral';
        }elseif($value == 'positive'){
            $value = 'positive';
        }elseif($value == 'pos'){
            $value = 'positive';
        }elseif($value == 'neg'){
            $value = 'negitive';
        }

        $this->attributes['sentiment'] = strtolower($value);
    }

    public function scopeNeedsToProcessed($query){
        return $query->where('sentiment', null);
    }

    /**
     * @param $query
     * @param $lang
     * @return mixed
     */
    public function scopeByLang($query,$lang)
    {
        return $query->where('lang',$lang);
    }

    /**
     * @param $query
     * @param $city
     * @return mixed
     */
    public function scopeByCity($query,$city)
    {
        return $query->where('body','like','%'.$city.'%');
    }

    /**
     * @param $query
     * @param $filters
     * @return mixed
     */
    public function scopeByFilters($query,$filters)
    {
        return $query->where(function ($query) use($filters){
            foreach ($filters as $filter){
                $query->Where('body','like','%'.$filter.'%');
            }
        });
    }

    public function scopeByEntities($query,$entities)
    {
        return $query->where(function ($query) use($entities){
            foreach ($entities as $entity){
                $query->orWhere('body','like','%'.$entity.'%');
            }
        });
    }
}
