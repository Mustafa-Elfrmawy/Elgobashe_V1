<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    protected $fillable = ['item_number', 'item_name'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
