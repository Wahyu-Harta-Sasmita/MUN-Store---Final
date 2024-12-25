<x-dashboard>
    <!-- Left Content -->
    <div class="flex-grow flex flex-col space-y-4">
              <!-- Search and Filter Section -->
              <div class="flex justify-between items-center bg-white p-4 rounded-lg shadow">
                <div class="flex items-center space-x-4">
                  <label for="employee" class="font-medium text-gray-700">Employee:</label>
                  <select 
                    name="employee" 
                    id="employee" 
                    class="rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="wahyu">Wahyu</option>
                    <option value="gatan">Gatan</option>
                    <option value="fery">Fery</option>
                    <option value="rizky">Rizky</option>
                  </select>
                </div>
          
                <div class="relative">
                  <input 
                    type="text" 
                    placeholder="Search products" 
                    class="border rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 w-64 pr-10">
                  <img 
                    src="{{ asset('assets/images/search.png') }}" 
                    alt="search" 
                    class="absolute right-3 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gray-500">
                </div>
              </div>
          
              <!-- Table Section -->
              <div class="bg-white h-[80vh] rounded-lg shadow overflow-auto">
                <table class="w-full text-left border-collapse">
                  <thead class="bg-[#4CAF50] text-white">
                    <tr>
                      <th class="px-4 py-2 ">Code</th>
                      <th class="px-4 py-2 ">Products</th>
                      <th class="px-4 py-2 ">Price</th>
                      <th class="px-4 py-2 ">Qty</th>
                      <th class="px-4 py-2 ">Sub Total</th>
                      <th class="px-4 py-2 ">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="hover:bg-gray-100">
                      <td class="px-4 py-2 ">MUHJ0001</td>
                      <td class="px-4 py-2 ">Jersey</td>
                      <td class="px-4 py-2 ">Rp. 100,000</td>
                      <td class="px-4 py-2 ">3</td>
                      <td class="px-4 py-2 ">Rp. 300,000</td>
                      <td class="px-4 py-2  flex space-x-2 justify-center">
                      <img src="{{ asset('assets/images/edit.png') }}" alt="Edit" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/view.png') }}" alt="View" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/delete.png') }}" alt="Delete" class="w-5 h-5 cursor-pointer" />
                      </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                      <td class="px-4 py-2">MUHJ0001</td>
                      <td class="px-4 py-2">Jersey</td>
                      <td class="px-4 py-2">Rp. 100,000</td>
                      <td class="px-4 py-2">3</td>
                      <td class="px-4 py-2">Rp. 300,000</td>
                      <td class="px-4 py-2 flex space-x-2 justify-center">
                      <img src="{{ asset('assets/images/edit.png') }}" alt="Edit" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/view.png') }}" alt="View" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/delete.png') }}" alt="Delete" class="w-5 h-5 cursor-pointer" />
                      </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                      <td class="px-4 py-2">MUHJ0001</td>
                      <td class="px-4 py-2">Jersey</td>
                      <td class="px-4 py-2">Rp. 100,000</td>
                      <td class="px-4 py-2">3</td>
                      <td class="px-4 py-2">Rp. 300,000</td>
                      <td class="px-4 py-2 flex space-x-2 justify-center">
                      <img src="{{ asset('assets/images/edit.png') }}" alt="Edit" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/view.png') }}" alt="View" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/delete.png') }}" alt="Delete" class="w-5 h-5 cursor-pointer" />
                      </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                      <td class="px-4 py-2">MUHJ0001</td>
                      <td class="px-4 py-2">Jersey</td>
                      <td class="px-4 py-2">Rp. 100,000</td>
                      <td class="px-4 py-2">3</td>
                      <td class="px-4 py-2">Rp. 300,000</td>
                      <td class="px-4 py-2 flex space-x-2 justify-center">
                      <img src="{{ asset('assets/images/edit.png') }}" alt="Edit" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/view.png') }}" alt="View" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/delete.png') }}" alt="Delete" class="w-5 h-5 cursor-pointer" />
                      </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                      <td class="px-4 py-2">MUHJ0001</td>
                      <td class="px-4 py-2">Jersey</td>
                      <td class="px-4 py-2">Rp. 100,000</td>
                      <td class="px-4 py-2">3</td>
                      <td class="px-4 py-2">Rp. 300,000</td>
                      <td class="px-4 py-2 flex space-x-2 justify-center">
                        <img src="{{ asset('assets/images/edit.png') }}" alt="Edit" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/view.png') }}" alt="View" class="w-5 h-5 cursor-pointer" />
                        <img src="{{ asset('assets/images/delete.png') }}" alt="Delete" class="w-5 h-5 cursor-pointer" />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
          
              <!-- Pay Section -->
              <div class="mt-auto p-4 flex justify-between items-center">
                <div class="space-y-2">
                  <div class="flex gap-2 bg-white rounded-lg px-9 py-4">
                    <h4 class="font-medium text-gray-700">Total Products</h4>
                    <span class="text-gray-600">5 Items</span>
                  </div>
                  <div class="flex gap-2 bg-white rounded-lg px-9 py-4">
                    <h4 class="font-medium text-gray-700">Total Price</h4>
                    <span class="text-gray-600">Rp. 5000000</span>
                  </div>
                </div>
                <div class="flex items-center space-x-4">
                  <div class="flex flex-col bg-white rounded-lg px-9 py-2">
                    <label for="pay" class="font-medium text-[40px] text-gray-700">PAID</label>
                    <input type="number" name="pay" id="pay" class="border rounded-md px-3 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                  </div>
                  <button class="bg-[#4CAF50] font-bold text-white text-[20px] px-16 py-11 rounded-md shadow">PAY NOW</button>
                </div>
              </div>
            </div>
          
            <!-- Right Sidebar -->
            <div class="w-[15%] bg-[#4CAF50] flex flex-col justify-start items-center space-y-4 py-4 shadow rounded-lg">
              <div class="flex items-center space-x-2 border-b-[2px] w-full border-white pl-2">
                <img src="{{ asset('assets/images/new.png') }}" alt="New Receipt" class="w-6 h-6">
                <span class="font-medium text-white">New Receipt</span>
              </div>
              <div class="flex items-center space-x-2 border-b-[2px] w-full border-white pl-2">
                <img src="{{ asset('assets/images/print.png') }}" alt="Print Receipt" class="w-6 h-6">
                <span class="font-medium text-white">Print Receipt</span>
              </div>
              <div class="flex items-center space-x-2 border-b-[2px] w-full border-white pl-2">
                <img src="{{ asset('assets/images/cancel.png') }}" alt="Cancel Receipt" class="w-6 h-6">
                <span class="font-medium text-white">Cancel</span>
              </div>
            </div>
          </div>
</x-dashboard>