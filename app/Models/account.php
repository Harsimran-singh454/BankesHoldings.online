<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;


        protected $table = 'account';
        public $timestamps = true;
        protected $fillable = [
            'account_owner',
            'account_name',
            'account_type',
            'account_number',
            'status',
            'rating',
            'phone_number',
            'ownership',
            'SIC_code',
            'modified_by',
            'current_balance',
            'due_date',
            'amount_past_due',
            'unbilled_charges',
            'arrangements_pending',
            'address',
            'DOB',
            'pin',
];
}
