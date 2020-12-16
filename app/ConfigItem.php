<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigItem extends Model
{
    protected $table = "config_items";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'link',
        'icon',
    ];

    protected $guarded = [

    ];
}
