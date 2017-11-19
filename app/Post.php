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
}
