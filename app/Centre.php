<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable
        = [
            'centre_id',
            'zone',
            'centre',
            'coordinator',
            'status',
        ];
}
