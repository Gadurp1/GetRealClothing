<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Blog extends Model
{
    
	protected $fillable=[

            'CatID',
            'slug' , 
            'name',
        
            'status' ,
            'content',
            'tags',
            'video_url',
            'image',
            'created_at',
            'user_id',

	];



    public function photos()
    {

    	return $this->hasMany('App\Photo');
    }


    public function user()
    {

        return $this->belongsTo('App\User');
    }

  

}
