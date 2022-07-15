<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //use HasFactory;
    protected $fillaable = ['name','address','email','website'];

    //define relationship method
    public function contacts()
    {
        return $this->hasMany(Contacts::class);
    }
}
