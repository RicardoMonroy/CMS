<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigFooter extends Model
{
    protected $table = "config_footers";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'color',
        'background',
        'copyright',
        'address',
        'phone',
        'email',
        'schedule',
    ];

    protected $guarded = [

    ];
}
