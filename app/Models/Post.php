<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   // use HasFactory;
   //Table name
   protected $table = 'posts';
   //Primary key
   public $primaryKey = 'id';
   //Timestamps
   public $timestamps = true;
   protected $fillable = ['title', 'body','image', 'user_id'];
    // @var
    protected $hidden=[
        'passwords', 'remember_token',
    ];
   public function user()
   {
       return $this->belongsTo(User::class);
   }
   public function posts(){
    return $this->hasMany('App\Post');
   }
}
