<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

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
    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["user", "super-admin", "manager"][$value],
        );
    }
    public function He_Info_Comments(){
        return $this->hasMany(He_Info_Comment::class);
    }

    public function Res_Info_Comments(){
        return $this->hasMany(Res_Info_Comment::class);
    }

    public function video_comment(){
        return $this->hasMany(Video_Comment::class);
    }
    public function per_comment(){
        return $this->hasMany(Per_Comment::class);
    }
    public function non_comment(){
        return $this->hasMany(Non_Comment::class);
    }
    public function fut_comment(){
        return $this->hasMany(Fut_Comment::class);
    }
}
