<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permation extends Model
{
    // protected $table = 'permations'; 
    // protected $primaryKey = 'id'; 

    protected $fillable = [
        'permation_name',
        'pr',
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'pr_id');
    }
    
    
}
