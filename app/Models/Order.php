<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'gloss',
        'carton_type',
        'additions',
        'printing',
        'paper_type',
        'sheet_size',
        'unfolding',
        'knife',
        'die',
        'net_knife',
        'quantity_sheets',
        'quantity_boxes',
        'order_code',
        'date',
        'client_id',
        'item_id'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
