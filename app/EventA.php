<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventA extends Model
{
    protected $table = 'eventa';

    protected $fillable = ['name' , 'surname' , 'email' , 'education' ,'address'] ;

		/*protected $dispatchesEvents = [
        'saved' => UserSaved::class,
        'deleted' => UserDeleted::class,
    ];*/
}
