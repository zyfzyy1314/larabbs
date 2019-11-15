<?php

namespace App;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];



    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }


    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }



}