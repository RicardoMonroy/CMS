<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigGeneral extends Model
{
    protected $table = "config_generals";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'font',
        'size',
        'logo',
        'background',
        'title',
        'favicon',
        'map',
    ];

    protected $guarded = [

    ];
}
