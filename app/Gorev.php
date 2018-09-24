<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gorev extends Model
{
    //
     //
	protected $table='gorev';
    protected $fillable = ['user_id', 'name', 'description'];
 
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
