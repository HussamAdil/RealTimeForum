<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Question extends Model
{
    protected $fillable = ['title' , 'body' , 'slug' ,'category_id' ,'user_id'];
    
    protected $with = ['replies'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($question)
        {
            $question->slug = str_slug($question->title);
        });
    }

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
        return "/question/$this->slug";
    }
}
