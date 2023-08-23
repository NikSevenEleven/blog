<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    protected $table ='posts';
    protected $guarded =false;
    use HasFactory;
    use SoftDeletes;

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'post_tags','post_id','tag_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function likedUsers()
    {
        return $this->belongsToMany(User::class,'post_user_likes','post_id','user_id');
    }
}
