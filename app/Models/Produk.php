<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    public $primaryKey='id_product';
    protected $table='tb_produk';
    protected $fillabe = [
        'product_code', 'product_name', 'path_img', 'product_image', 
        'category', 'price', 'stock', 'type', 'created_at', 'updated_at',
    ];
    public function transaction_detail() {
        return $this->hasMany(TransactionDetail::class, 'id_product', 'id_product');
    }
}
