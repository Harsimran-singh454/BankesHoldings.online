<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class msg extends Model
{
    use HasFactory;
    protected $table = 'msg';
        public $timestamps = true;
        protected $fillable = [
            'acc_id',
            'added_by',
            'remarks',
            'time',
        ];
}
