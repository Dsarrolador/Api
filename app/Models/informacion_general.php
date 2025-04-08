<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informacion_general extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'last_name','last_name' , 'cedula' , 'fecha_nacimiento' ,'genero'];
   
   public function user()
    {
        return $this->belongsTo(User::class);
    }

}
