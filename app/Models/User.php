<?php

namespace App\Models;

use App\Models\Tweet;
use App\Traits\Followable;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable, Followable;

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

    /**
     * URL to retrieve free avatar
     *
     * @var string
     */
    private $avatarBaseUrl = 'https://i.pravatar.cc/';

    /**
     * Sizes of avatars used
     *
     * @var array
     */
    private $avatarSizes = [
        'main' => 40,
        'large' => 150
    ];

    /**
     * URL of service to get profile image (not square, like for 'pravatar')
     * 
     * @var string
     */
    private $profileImageBaseUrl = 'https://picsum.photos/seed/';

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    public function timeline()
    {
        $ids = $this->follows()
            ->pluck('id')
            ->push($this->id);

        return Tweet::whereIn('user_id', $ids)->latest()->get();
    }

    public function path()
    {
        return route('profiles.single', $this);
    }

    public function getAvatarAttribute()
    {
        return $this->buildAvatarUrl($this->avatarBaseUrl, $this->avatarSizes['main']);
    }

    public function getAvatarLargeAttribute()
    {
        return $this->buildAvatarUrl($this->avatarBaseUrl, $this->avatarSizes['large']);;
    }

    private function buildAvatarUrl(string $baseUrl, int $size)
    {
        return $baseUrl . $size . '?u=' . $this->email;
    }

    public function getProfileImageAttribute()
    {
        return $this->profileImageBaseUrl . $this->username . '/750/220.webp';
    }

    public function isMe()
    {
        return Auth::id() === $this->id;
    }
}
