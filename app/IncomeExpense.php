<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeExpense extends Model
{
    protected $table = "income_expenses";



//accessors
    public function getBtnAttribute()
    {
    	if($this->type == 'income')
    	{
    		return "alert alert-success";
    	}
    	return "alert alert-danger";
    }

//mutators
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = strtoupper($value);
    }


    public function getHumanDateAttribute()
    {
    	return $this->created_at->diffForHumans();	
    }


}


