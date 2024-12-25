<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MUN Store</title>
    @vite('resources/css/app.css')
  </head>
  <body>
    <div class="flex">
      <!-- Sidebar Start -->
      <div class="h-[100vh] w-[250px]">
        <div>
          <img src="{{ asset('assets/images/Group 99.png') }}" alt="logo" class="w-[250px] h-[100px]" />
        </div>
        <div class="flex items-center gap-2 pl-4 py-2 hover:bg-gray-500 hover:text-white">
          <img src="{{ asset('assets/images/dashboard.png') }}" alt="Dashboard" class="w-[20px] h-[20px]" />
          <a href="{{route('dashboard')}}">Dashboard</a>
        </div>
        <div class="flex items-center gap-2 pl-4 py-2 hover:bg-gray-500 hover:text-white">
          <img src="{{ asset('assets/images/cashier.png') }}" alt="Transaction" class="w-[20px] h-[20px]" />
          <a href="{{route('transaction')}}">Transaction</a>
        </div>
        <div class="flex items-center gap-2 pl-4 py-2 hover:bg-gray-500 hover:text-white">
          <img src="{{ asset('assets/images/products.png') }}" alt="Products" class="w-[20px] h-[20px]" />
          <a href="{{route('products')}}">Products</a>
        </div>
        <div class="flex items-center gap-2 pl-4 py-2 hover:bg-gray-500 hover:text-white">
          <img src="{{ asset('assets/images/history.png') }}" alt="History" class="w-[20px] h-[20px]" />
          <a href="{{route('history')}}">History</a>
        </div>
      </div>
      <!-- Sidebar End -->

      <div class="w-[80%] h-[100vh]">
        <!-- Header Start -->
        <div class="h-[60px] flex justify-between items-center px-4 bg-white">
          <h1 class="text-lg font-bold text-gray-800">Dashboard Cashier</h1>
          <div class="flex items-center space-x-2">
            <div class="flex justify-center items-center rounded-full bg-gray-300 h-[40px] w-[40px]">
              <img src="{{ asset('assets/images/admin.png') }}" alt="Admin" class="w-[20px] h-[20px]" />
            </div>
            <span class="font-bold text-gray-600">Cashier</span>
          </div>
        </div>
        <!-- Header End -->

        <!-- Content Start -->
        <div class="h-[90%] bg-[#F2EDED] p-4 flex space-x-4">
          {{ $slot }}
        </div>
        <!-- Content End -->
      </div>
    </div>
  </body>
</html>
