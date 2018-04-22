<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //check laravel documentation
    //table Name
    protected $table = 'posts'; //pasts is the defaul name
    //Primary Key
    public $primaryKey = 'id'; //default is 'id'
    //Timestamps
    public $timestamps = true; //default
}
