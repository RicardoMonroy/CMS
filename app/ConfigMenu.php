<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigMenu extends Model
{
    protected $table = "config_menus";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'color',
        'background',
    ];

    protected $guarded = [

    ];
}
