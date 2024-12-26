<?php

namespace App\Livewire;

use App\Models\Produk;
use Livewire\Component;

class TransactionComponent extends Component
{
    public $searchQuery = '';
    public $selectedEmployee = '';
    public $products = [];
    public $cart = [];
    public $payment = 0;

    public function getTotalPrice()
    {
        return array_reduce($this->cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
    }

    public function addToCart($productId)
    {
        $product = Produk::find($productId);

        if ($product) {
            $existingItem = collect($this->cart)->firstWhere('id_product', $product->id_product);

            if ($existingItem) {
                $existingItem['quantity']++;
            } else {
                $this->cart[] = [
                    'id_product' => $product->id_product,
                    'code' => $product->product_code,
                    'name' => $product->product_name,
                    'price' => $product->price,
                    'quantity' => 1,
                    'stock' => $product->stock
                ];
            }

            $this->emit('cartUpdated');
        }
    }


    public function render()
    {
        $products = Produk::query()
            ->where('product_name', 'like', '%' . $this->searchQuery . '%')
            ->get();

        return view('livewire.transaction-component', [
            'products' => $products
        ]);
    }
}
