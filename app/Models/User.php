<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name', 'first_name', 'email', 'password',
        'role', 'last_login', 'kol_parner_id',
        'status'
    ];

    /**
     * Quan hệ các bảng
     */

    public function credit() : HasOne
    {
        return $this->hasOne(Credit::class);
    }
    public function orders() : HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function log_activities() : HasMany
    {
        return $this->hasMany(LogActivity::class);
    }

    public function payments() : HasMany
    {
        return $this->hasMany(Payment::class, 'user_id');
    }

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
        'password' => 'hashed',
    ];

    protected $appends = ['full_name'];

    public function getFullNameAttribute() // notice that the attribute name is in CamelCase.
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function userDetail() : HasOne
    {
        return $this->hasOne(UserDetail::class);
    }

    public function socialAccount() : HasMany
    {
        return $this->hasMany(SocialAccount::class);
    }

    public function scopeNotInHirePartners($query)
    {
        return $query->whereNotExists(function ($subQuery){
            $subQuery->select(DB::raw(1))
                ->from('hire_partners')
                ->whereRaw('FIND_IN_SET(users.id, hire_partners.user_ids)');
        });
    }

    public function scopeNotInReferPartners($query)
    {
        return $query->whereNotExists(function ($subQuery){
            $subQuery->select(DB::raw(1))
                ->from('refer_partners')
                ->whereRaw('FIND_IN_SET(users.id, refer_partners.user_ids)');
        });
    }
}
