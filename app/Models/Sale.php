<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = ['client_id', 'product_id', 'date', 'quantity', 'total'];

    public function client(){
        return $this->belongsTo(Client::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
