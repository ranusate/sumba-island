<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static firstWhere(string $string, array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|string|null $request)
 */
class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
