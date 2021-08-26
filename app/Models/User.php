<?php

namespace App\Models;

use App\Models\Tweet;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }

    public function follow(int $user_id)
    {
        return $this->follows()->attach($user_id);
    }

    public function timeline()
    {
        $ids = $this->follows()
            ->pluck('id')
            ->push($this->id);

        return Tweet::whereIn('user_id', $ids)->latest()->get();
    }

    public function getAvatarAttribute()
    {
        return 'https://i.pravatar.cc/40?u=' . $this->email;
    }

    public function getProfileImageAttribute()
    {
        return 'https://picsum.photos/seed/' . $this->username . '/750/220.webp';
    }

    public function getRouteKeyName()
    {
        return 'username';
    }
}
