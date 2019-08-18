<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    protected $fillable = ['title' , 'body' , 'slug' ,'category_id' ,'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    public function cartegory()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getPathAttribute()
    {
        return "api/question/$this->slug";
    }
}
