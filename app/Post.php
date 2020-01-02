<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $title='post';
   // protected $body='blog';

    public $primaryKey='id';
    public $timestamps=true;
}
