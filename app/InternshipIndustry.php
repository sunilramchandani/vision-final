<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternshipIndustry extends Model
{
    protected $table = 'internship_industry'; 
    protected $primaryKey = 'id';
    public $timestamps = false;	

    public function internshipCompany()
    {
        return $this->belongsTo('App\InternshipCompany', 'company_id');
    }


}
