<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	//table name
    protected $table = 'tasks';

    //primary key
    public $primaryKey = 'id';

    public $timestamp = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
