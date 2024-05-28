<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function setSolutionTitleAttribute($value)
    {
        $this->attributes['solution_title'] = json_encode($value);
    }

    public function getSolutionTitleAttribute($value)
    {
        return json_decode($value);
    }

    public function setSolutionDescriptionAttribute($value)
    {
        $this->attributes['solution_description'] = json_encode($value);
    }

    public function getSolutionDescriptionAttribute($value)
    {
        return json_decode($value);
    }

    public function setCounterNumbersAttribute($value)
    {
        $this->attributes['counter_numbers'] = json_encode($value);
    }   

    public function getCounterNumbersAttribute($value)
    {
        return json_decode($value);
    }

    public function setCounterTextAttribute($value)
    {
        $this->attributes['counter_text'] = json_encode($value);
    }

    public function getCounterTextAttribute($value)
    {
        return json_decode($value);
    }

    

}
