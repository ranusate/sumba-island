<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Clockwork\Request\Request;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Cviebrock\EloquentSluggable\Sluggable;

/**
 * @method static latest()
 * @method static where(string $string, $id)
 */
class Post extends Model
{
    use HasFactory, Sluggable;

    // protected $fallible = ['title', 'excerpt', 'body'];
    protected $guarded = ['id'];

    protected $with = ['user', 'category'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function Sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    /**
     * category
     *
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     *
     * To query by scope filter
     * @param $query
     * @param array $filter
     */
    public function scopeFilter($query, array $filter)
    {
        // if ($filter['search'] ?? false) {
        //     return  $query->where('title', 'like', '%' . $filter['search'] . '%')
        //         ->orWhere('body', 'like', '%' . $filter['search'] . '%');
        // }

        $query->when($filter['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filter['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
        $query->when($filter['author'] ?? false, function ($query, $author) {
            return $query->whereHas('user', function ($query) use ($author) {
                $query->where('username', $author);
            });
        });
    }

    /**
     * Handle an authentication attempt.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
