<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use function Brio\strCut;

class Post extends Model
{
    /**
     * @return string
     */
    public function getSmallTextAttribute()
    {
        return strCut($this->attributes['text']);
    }

    /**
     * @return string
     */
    public function getHomeImageAttribute()
    {
        return route('imagePostHome', $this->id);
    }

    /**
     * @return string
     */
    public function getPostImageAttribute()
    {
        return route('imagePost', $this->id);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
