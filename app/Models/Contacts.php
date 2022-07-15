<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
   // use HasFactory;

   //define inverse relationship method
   public function company()
   {
    return $this->belongsTo(Company::class);
    //omit second argument(ex: Company::class,'company_id')
   }
}

