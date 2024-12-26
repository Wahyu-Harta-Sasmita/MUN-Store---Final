<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $primaryKey='id_transaction';
    protected $table='tb_transaction';
    protected $fillabe=[
        'total_price', 'paid', 'return', 'created_at', 'updated_at', 
    ];
    public function transaction_detail(){
        return $this->hasMany(TransactionDetail::class, 'id_transaction', 'id_transaction');
    }
}
