<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact',
        'gender',
        'password',
        'institution',
        'address',
        'level_of_experience',
        'category',
        'interests',
        'skills',
        'is_mentee',
        'mentee_message',
        'mentee_bio',
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

    public static function createUser($request)
    {

        // dd($request);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' =>  $request->email,
            'contact' => $request->contact,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'institution' => $request->institution,
            'address' => $request->address,
            'level_of_experience' => $request->level_of_experience,
            'interests' => json_encode($request->interests),
            'mentee_message' => $request->mentee_message
        ]);
    }
}
