<x-dashboard>
    <!-- Main Content -->
    <div class="py-12 w-[100%]">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Add Product Button -->
                    <div class="mb-4 flex justify-end">
                        <a href="#" class="bg-main text-white px-4 py-2 rounded">
                            + Add Product
                        </a>
                    </div>

                    <!-- Products Table -->
                    <table class="min-w-full table-auto border-collapse border border-gray-300">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">Checklist</th>
                                <th class="border border-gray-300 px-4 py-2">Name</th>
                                <th class="border border-gray-300 px-4 py-2">Code</th>
                                <th class="border border-gray-300 px-4 py-2">Category</th>
                                <th class="border border-gray-300 px-4 py-2">Stock</th>
                                <th class="border border-gray-300 px-4 py-2">Price</th>
                                <th class="border border-gray-300 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($produk as $item)
                                <tr class="text-center">
                                    <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->product_name }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->product_code }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->category }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item->stock }}</td>
                                    <td class="border border-gray-300 px-4 py-2">Rp. {{ number_format($item->price, 0, ',', '.') }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="#" 
                                           class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                            Edit
                                        </a>
                                        <form action="" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
                                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center py-4">No products available.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $produk->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard>
