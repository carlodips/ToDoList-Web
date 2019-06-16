<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //table name
    protected $table = 'categories';

    //primary key
    public $primaryKey = 'id';

    public $timestamp = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->hasMany('App\Task');
    }
}
