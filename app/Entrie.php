<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrie extends Model
{
    protected $table = "entries";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
    ];

    protected $guarded = [

    ];
}
