<x-dashboard>
    <main class="w-[100%]">
        <div class="bg-white rounded-[10px] px-2 py-2 mb-2 flex justify-between">
            <h2 class="text-xl font-semibold">History</h2>
            <select name="" id="" class="px-2 border-2 border-main bg-main text-white rounded-sm">
                <option value="">Jersey</option>
                <option value="">Shoes</option>
                <option value="">T-shirt</option>
                <option value="">Jacket</option>
                <option value="">Ball</option>
            </select>
        </div>
        <div class="overflow-y-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg">
                <thead>
                    <tr class="bg-gray-600 text-white">
                        <th class="py-2 px-4 text-left">Products</th>
                        <th class="py-2 px-4 text-left">Code</th>
                        <th class="py-2 px-4 text-left">Quantity</th>
                        <th class="py-2 px-4 text-left">Total Price</th>
                        <th class="py-2 px-4 text-left">Paid</th>
                        <th class="py-2 px-4 text-left">Date</th>
                        <th class="py-2 px-4 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4">Jersey Home</td>
                        <td class="py-2 px-4">MUHJ0001</td>
                        <td class="py-2 px-4">12</td>
                        <td class="py-2 px-4">Rp. 10.000.000</td>
                        <td class="py-2 px-4">Rp. 15.000.000</td>
                        <td class="py-2 px-4">11/02/2023</td>
                        <td class="py-2 px-4 text-blue-500 cursor-pointer flex justify-center">
                            <img src="{{ asset('assets/images/view.png') }}" alt="show" class="w-5 h-5">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</x-dashboard>