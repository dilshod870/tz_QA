<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventB extends Model
{
    protected $table = 'eventb';

    protected $fillable = ['name' , 'surname' , 'email' , 'education' ,'address'] ;
}
