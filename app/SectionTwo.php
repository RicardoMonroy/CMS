<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTwo extends Model
{
    protected $table = "section_twos";
    protected $primaryKey = "id";

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'image',
        'description',
    ];

    protected $guarded = [

    ];
}
