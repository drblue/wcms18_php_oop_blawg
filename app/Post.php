<?php

namespace App;

use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'category_id', 'title', 'content',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
