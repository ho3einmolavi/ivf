<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function academies()
    {
        return $this->hasMany(Academy::class);
    }
}
