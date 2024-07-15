<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Shop;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Shop::class, 'favorites', 'user_id', 'shop_id')->withTimestamps();
    }

    public function favorite($shopId)
    {
        $exist = $this->is_favorite($shopId);

        if($exist){
            return false;
        }else{
            $this->favorites()->attach('shopId');
            return true;
        }
    }

    public function unfavorite($shopId)
    {
        $exist = $this->is_favorite($shopId);

        if ($exist) {
            $this->favorites()->detach('shopId');
            return true;
        } else {
            return false;
        }
    }

    public function is_favorite($shopId)
    {
        return $this->favorites()->where('shop_id', $shopId)->$exists();
    }
}
