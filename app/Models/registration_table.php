<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registration_table extends Model
{
    public $table='registeredusers';
    public $incrementing=true;

    public $timestamps=false;

    
}
