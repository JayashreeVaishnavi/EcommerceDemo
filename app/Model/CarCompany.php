<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CarCompany extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'year_id'];
}
