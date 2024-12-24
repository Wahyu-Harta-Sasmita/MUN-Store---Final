<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --main-color: #4CAF50;
            --secondary-color: #00F863;
            --text-white: #FFFFFF;
            --text-black: #000000;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-[var(--main-color)] text-[var(--text-white)] flex flex-col">
            <div class="p-4 flex items-center space-x-4">
                <img src="https://via.placeholder.com/50" alt="Logo" class="h-12 w-12">
                <div>
                    <h1 class="text-lg font-bold">MUN</h1>
                    <p class="text-sm">Official Store</p>
                </div>
            </div>
            <nav class="mt-6">
                <a href="#" class="block py-2 px-4 text-[var(--text-white)] bg-[var(--secondary-color)] hover:bg-[var(--secondary-color)] flex items-center space-x-2">
                    <img src="https://via.placeholder.com/20" alt="Dashboard Icon" class="h-5 w-5">
                    <span>Dashboard</span>
                </a>
                <a href="#" class="block py-2 px-4 text-[var(--text-white)] hover:bg-[var(--secondary-color)] flex items-center space-x-2">
                    <img src="https://via.placeholder.com/20" alt="Products Icon" class="h-5 w-5">
                    <span>Products</span>
                </a>
                <a href="#" class="block py-2 px-4 bg-[var(--secondary-color)] text-[var(--text-white)] flex items-center space-x-2">
                    <img src="https://via.placeholder.com/20" alt="History Icon" class="h-5 w-5">
                    <span>History</span>
                </a>
                <a href="#" class="block py-2 px-4 text-[var(--text-white)] hover:bg-[var(--secondary-color)] flex items-center space-x-2">
                    <img src="https://via.placeholder.com/20" alt="Download Report Icon" class="h-5 w-5">
                    <span>Download Report</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="bg-white shadow-md p-4 flex justify-between items-center">
                <input 
                    type="text" 
                    placeholder="Search products with products code or products name" 
                    class="border rounded-lg p-2 w-1/2 focus:outline-none focus:ring focus:border-blue-300">
                <div class="flex items-center space-x-4">
                    <button class="text-gray-500 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 13h2l1 9h14l1-9h2m-4-7h-2V2h-4v4h-4v4h2V6h4v4h2V6h4m-4 0h4V6h4"></path>
                        </svg>
                    </button>
                    <button class="text-gray-500 hover:text-gray-800">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 17l-4 4m0 0l-4-4m4 4V3"></path>
                        </svg>
                    </button>
                    <span class="text-sm text-gray-700">cashier - MUN Store</span>
                </div>
            </header>

            <!-- Content -->
            <main class="p-4">
                <h2 class="text-xl font-semibold mb-4">History</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white shadow-md rounded-lg">
                        <thead>
                            <tr class="bg-[var(--main-color)] text-[var(--text-white)]">
                                <th class="py-2 px-4 text-left">Products</th>
                                <th class="py-2 px-4 text-left">Code</th>
                                <th class="py-2 px-4 text-left">Quantity</th>
                                <th class="py-2 px-4 text-left">Total Price</th>
                                <th class="py-2 px-4 text-left">Paid</th>
                                <th class="py-2 px-4 text-left">Return</th>
                                <th class="py-2 px-4 text-left">Date</th>
                                <th class="py-2 px-4 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row -->
                            <tr class="border-b">
                                <td class="py-2 px-4">Jersey Home Manchester United Season 2024/2025</td>
                                <td class="py-2 px-4">MUN/JS01</td>
                                <td class="py-2 px-4">12</td>
                                <td class="py-2 px-4">Rp. 10,000,000</td>
                                <td class="py-2 px-4">Rp. 15,000,000</td>
                                <td class="py-2 px-4">Rp. 5,000,000</td>
                                <td class="py-2 px-4">11/02/2023 08:49</td>
                                <td class="py-2 px-4 text-blue-500 cursor-pointer">View</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>
