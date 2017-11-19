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

    public function getHomeImageAttribute()
    {
        return route('imagePostHome', $this->id);
    }

    public function getPostImageAttribute()
    {
        return route('imagePost', $this->id);
    }
}
