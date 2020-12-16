<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallerie extends Model
{
    protected $table = "galleries";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
    ];

    protected $guarded = [

    ];
}
