<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Person extends Model
{
    	protected $fillable = [
        'name', 'surname', 'dni','direccion','date','genero','telefono','status',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
