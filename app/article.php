<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    public function category(){
        return $this->belongsTo('categories','id','tourismcategory_id');
    }
    
    public function User(){
        return $this->belongsTo('users','id','tourismuser_id');
    }

    protected $fillable =[
        'tourismuser_id','tourismcategory_id','title','description','image'
    ];
}
