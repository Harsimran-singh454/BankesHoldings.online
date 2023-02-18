<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class admin extends Authenticable implements MustVerifyEmail
{
    use HasFactory;

    public function verifyadmin(){
        return $this->hasOne('App\Models\verifyadmin');
    }


        protected $table = 'admin';
        public $timestamps = true;
        protected $fillable = [
            'name',
            'email',
            'role',
            'password',
        ];

}
