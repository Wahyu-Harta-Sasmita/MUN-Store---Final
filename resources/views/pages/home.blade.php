<x-dashboard>
<div
            class="w-[95%] mx-auto flex flex-col justify-center items-center"
          >
            <!-- Header Content Start -->
            <div class="text-center p-[10px]">
              <h2 class="text-[20px] font-bold">WELCOME CASHIER</h2>
              <p class="text-[16px] font-semibold">
                Check Your MUN Store Performence
              </p>
            </div>
            <!-- Header Content End -->

            <!-- CARD Start -->
            <div
              class="flex w-full justify-between items-center flex-wrap gap-6 px-6 py-4"
            >
              <!-- CARD 1 -->
              <div
                class="flex flex-col items-center justify-center bg-gradient-to-r from-blue-400 to-blue-600 text-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 p-4 w-[30%] min-w-[200px] h-[150px]"
              >
                <img
                  src="{{ asset('assets/images/cashier-white.png') }}"
                  alt="cashier"
                  class="w-16 h-16 mb-2"
                />
                <a href="{{ route('transaction') }}" class="text-md font-semibold">Transaction</a>
              </div>
              <!-- CARD 1 End -->

              <!-- CARD 2 -->
              <div
                class="flex flex-col items-center justify-center bg-gradient-to-r from-green-400 to-green-600 text-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 p-4 w-[30%] min-w-[200px] h-[150px]"
              >
                <img
                  src="{{ asset('assets/images/products-white.png') }}"
                  alt="products"
                  class="w-16 h-16 mb-2"
                />
                <a href="{{ route('products') }}" class="text-md font-semibold">Products</a>
              </div>
              <!-- CARD 2 End -->

              <!-- CARD 3 -->
              <div
                class="flex flex-col items-center justify-center bg-gradient-to-r from-purple-400 to-purple-600 text-white rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300 p-4 w-[30%] min-w-[200px] h-[150px]"
              >
                <img
                  src="{{ asset('assets/images/history-white.png') }}"
                  alt="history"
                  class="w-16 h-16 mb-2"
                />
                <a href="{{ route('history') }}" class="text-md font-semibold">History</a>
              </div>

              <!-- CARD 3 End -->
            </div>
            <!-- CARD End -->

            <!-- Header Main Content Start -->
            <div class="shadow-lg w-full">
              <h2 class="text-[20px] font-bold px-6 py-4">New Transaction</h2>
            </div>
            <!-- Header Main Content End -->

            <!-- Table Start -->
            <table
              class="w-full bg-white shadow-md rounded-lg overflow-hidden mt-4"
            >
              <thead
                class="bg-gradient-to-r from-green-400 to-green-600 text-white"
              >
                <tr>
                  <th class="px-6 py-3 text-left">Products</th>
                  <th class="px-6 py-3 text-left">Qty</th>
                  <th class="px-6 py-3 text-left">Price</th>
                  <th class="px-6 py-3 text-left">Date</th>
                </tr>
              </thead>
              <tbody>
              @foreach ($datas as $data)
                <tr class="border-b">
                  <td class="px-6 py-4 flex items-center">
                    <img src="{{ asset('assets/images/image.png') }}" alt="Product" class="w-10 h-10 mr-4" />
                    <span>{{ $data['product_name'] }}</span>
                  </td>
                  <td class="px-6 py-4">{{ $data['quantity'] }}</td>
                  <td class="px-6 py-4">{{ $data['price'] }}</td>
                  <td class="px-6 py-4">{{ $data['created_at'] }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <!-- Table End -->
          </div>
</div>
</x-dashboard>