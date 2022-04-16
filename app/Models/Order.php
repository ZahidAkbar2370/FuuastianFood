<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [

        'invoice','customer_name','contact_no','location','product_name',
        'product_quantity','product_price','product_image','total_price',
        'status'

    ];
}
