<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function article(){
        return $this->hasMany('articles','tourismcategory_id','id');
    }
    protected $fillable =[
        'categoryName'
    ];
}
