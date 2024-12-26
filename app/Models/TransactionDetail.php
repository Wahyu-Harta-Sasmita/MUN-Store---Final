<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    public $primaryKey='id_detail';
    protected $table='transaction_detail';
    protected $fillabe = [
        'id_transaction', 'id_product', 'quantity', 'sub_total', 'created_at', 'updated_at'
    ];
    public function transaction() {
        return $this->belongsTo(Transaction::class, 'id_transaction', 'id_transaction');
    }
    public function produk() {
        return $this->belongsTo(Produk::class, 'id_product', 'id_product');
    }

    
}
