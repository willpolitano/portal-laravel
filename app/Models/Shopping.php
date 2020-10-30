<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->hasOne('App\Models\Payment', 'id', 'payment_id');
    }

    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'client_id');
    }

    public function product()
    {
        return $this->BelongsToMany('App\Models\Product', 'shoppings_products', 'shopping_id', 'product_id')->withPivot('amount');
    }
}
