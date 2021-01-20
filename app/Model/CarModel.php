<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarModel extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['car_company_id', 'year_id', 'name', 'features', 'price'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(CarCompany::class, 'car_company_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function year()
    {
        return $this->belongsTo(Year::class);
    }

    /**
     * Get the model features.
     *
     * @param $value
     * @return string
     */
    public function getFeaturesAttribute($value)
    {
        $result = '<ul class="list-group">';
        $values = json_decode($value);
        foreach ($values as $value) {
            $result .= '<li class="list-group-item" style="border: none">' . $value . '</li>';
        }
        $result .= '</ul>';
        return $result;
    }
}
