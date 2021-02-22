<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    //use HasFactory;
    protected $fillable =[
        'license_key',
        'expire_date',
        'user_id'
    ];
  

    public function user()
    {
        return $this->belongsTo('User::class');
    }


}
