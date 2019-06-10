<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['user_id', 'category_id', 'tag_id', 'content'];
    //ToDo Relation
}