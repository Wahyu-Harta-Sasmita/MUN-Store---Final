<div class="flex space-x-4">
    <!-- Left Content -->
    <div class="flex-grow flex flex-col space-y-4">
        <!-- Search and Filter Section -->
        <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow">
            <div class="flex items-center space-x-4">
                <label for="employee" class="font-medium text-gray-700">Employee:</label>
                <select
                    wire:model="selectedEmployee"
                    class="rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Select Employee</option>
                    <option value="wahyu">Wahyu</option>
                    <option value="gatan">Gatan</option>
                    <option value="fery">Fery</option>
                    <option value="rizky">Rizky</option>
                </select>
            </div>

            <div class="relative">
                <input
                    type="text"
                    wire:model.debounce.300ms="searchQuery"
                    placeholder="Search products"
                    class="border rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 w-64 pr-10">
                <img src="{{ asset('assets/images/search.png') }}" alt="search" class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-500">
            </div>
        </div>

        <!-- Product Search Results -->
        @if($searchQuery && $products->isNotEmpty())
        <div class="bg-white p-4 rounded-lg shadow">
            <div class="grid grid-cols-4 gap-4">
                @foreach($products as $product)
                <div wire:click="addToCart({{ $product->id_product }})"
                    class="p-4 border rounded-lg cursor-pointer hover:bg-gray-50">
                    <p class="font-medium">{{ $product->product_name }}</p>
                    <p class="text-sm text-gray-600">Stock: {{ $product->stock }}</p>
                    <p class="text-green-600">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Table Section -->
        <div class="bg-white h-[45vh] rounded-lg shadow overflow-auto">
        <div wire:loading>Loading...</div>

<!-- Tabel Keranjang -->
@if(count($cart) > 0)
            <table class="w-full text-left border-collapse">
                <thead class="bg-[#4CAF50] text-white">
                    <tr>
                        <th class="px-4 py-2">Code</th>
                        <th class="px-4 py-2">Products</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Qty</th>
                        <th class="px-4 py-2">Sub Total</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $index => $item)
                    <tr class="hover:bg-gray-100">
                        <td class="px-4 py-2">{{ $item['product_code'] }}</td>
                        <td class="px-4 py-2">{{ $item['product_name'] }}</td>
                        <td class="px-4 py-2">Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                        <td class="px-4 py-2">
                            <input
                                type="number"
                                wire:model="cart.{{ $index }}.quantity"
                                min="1"
                                max="{{ $item['stock'] }}"
                                class="w-20 border rounded px-2 py-1">
                        </td>
                        <td class="px-4 py-2">Rp {{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                        <td class="px-4 py-2">
                            <div class="flex space-x-2 justify-center">
                                <img
                                    wire:click="removeFromCart('{{ $item['id_product'] }}')"
                                    src="{{ asset('assets/images/delete.png') }}"
                                    alt="Delete"
                                    class="w-5 h-5 cursor-pointer" />
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>

        <!-- Pay Section -->
        <div class="mt-auto p-4 flex justify-between items-center">
            <div class="space-y-2">
                <div class="flex gap-2 bg-white rounded-lg px-9 py-4">
                    <h4 class="font-medium text-gray-700">Total Products</h4>
                    <span class="text-gray-600">{{ count($cart) }} Items</span>
                </div>
                <div class="flex gap-2 bg-white rounded-lg px-9 py-4">
                    <h4 class="font-medium text-gray-700">Total Price</h4>
                    <span class="text-gray-600">Rp {{ number_format($this->getTotalPrice(), 0, ',', '.') }}</span>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <div class="flex flex-col bg-white rounded-lg px-9 py-2">
                    <label class="font-medium text-[40px] text-gray-700">PAID</label>
                    <input
                        type="number"
                        wire:model="payment"
                        class="border border-green-300 rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
                <button
                    wire:click="processTransaction"
                    class="bg-[#4CAF50] font-bold text-white text-[20px] px-16 py-11 rounded-md shadow disabled:opacity-50"
                    {{ $payment < $this->getTotalPrice() || count($cart) === 0 ? 'disabled' : '' }}>
                    PAY NOW
                </button>
            </div>
        </div>
    </div>

    <!-- Right Sidebar -->
    <div class="w-[15%] bg-[#4CAF50] h-[85vh] flex flex-col justify-start items-center space-y-4 py-4 shadow rounded-lg">
        <div wire:click="resetCart" class="flex items-center space-x-2 border-b-[2px] w-full border-white pl-2 cursor-pointer">
            <img src="{{ asset('assets/images/new.png') }}" alt="New Receipt" class="w-6 h-6">
            <span class="font-medium text-white">New Receipt</span>
        </div>
        <div class="flex items-center space-x-2 border-b-[2px] w-full border-white pl-2 cursor-pointer">
            <img src="{{ asset('assets/images/print.png') }}" alt="Print Receipt" class="w-6 h-6">
            <span class="font-medium text-white">Print Receipt</span>
        </div>
        <div wire:click="resetCart" class="flex items-center space-x-2 border-b-[2px] w-full border-white pl-2 cursor-pointer">
            <img src="{{ asset('assets/images/cancel.png') }}" alt="Cancel Receipt" class="w-6 h-6">
            <span class="font-medium text-white">Cancel</span>
        </div>
    </div>
</div>