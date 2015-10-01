<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    

    protected $table='blog_photos';

    protected $fillable = [

    	'path',
    	'name',
    	'thumbnail_path'

    ];
    public static function named(UploadedFile $file)
    {

        return(new static)->saveAs($file->getClientOriginalName());

    }

    protected function saveAs($name)
    {

    	$this->name=sprintf('%s-%s',time(),$name);
    	$this->path=sprintf('%s/%s',time(),$this->baseDir,$this->name);
    	$this->tumbnail_path=sprintf('%s/tn-%s',time(),$this->baseDir,$this->name);

    }
 
}
