<div class="flex h-screen bg-gray-100">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-lg flex flex-col justify-between">
        
        <!-- Top Section: Logo -->
        <div class="p-4">
            <div class="flex items-center gap-4">
                <!-- Image on the left -->
                <img src="{{ asset('images/dashboardActive.png') }}" alt="Admin" class="w-14 h-14 rounded-xl">

                <!-- Text on the right -->
                <div class="flex flex-col">
                    <h2 class="text-xl font-bold">Admin Panel</h2>
                    <p class="text-gray-500 text-sm">Business Operations</p>
                </div>
            </div>
        </div>
        <div class="border-b border-gray-300"></div>
        <!-- Menu Items -->
        <nav class="flex-1 px-6 py-4">
            <ul class="space-y-2">
                <li class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-blue-50 cursor-pointer">
                    <img src="{{ asset('images/dashboardInactive.png') }}" alt="Dashboard" class="w-10 h-10">
                    <span class="text-md font-medium">Dashboard</span>
                </li>
                <li class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-blue-50 cursor-pointer">
                    <img src="{{ asset('images/cartInactive.png') }}" alt="Sales" class="w-10 h-10">
                    <span class="text-md font-medium">Sales</span>
                </li>
                <li class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-blue-50 cursor-pointer">
                    <img src="{{ asset('images/inventoryInactive.png') }}" alt="Product" class="w-10 h-10">
                    <span class="text-md font-medium">Product</span>
                </li>
                <li class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-blue-50 cursor-pointer">
                    <img src="{{ asset('images/inventoryInactive.png') }}" alt="Inventory" class="w-10 h-10">
                    <span class="text-md font-medium">Inventory</span>
                </li>
                <li class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-blue-50 cursor-pointer bg-[#DBEAFE] bg-opacity-50">
                    <img src="{{ asset('images/userActive.png') }}" alt="Employee" class="w-10 h-10">
                    <span class="text-md font-medium">Employee</span>
                </li>
                <li class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-blue-50 cursor-pointer">
                    <img src="{{ asset('images/cashInactive.png') }}" alt="Payroll" class="w-10 h-10">
                    <span class="text-md font-medium">Payroll</span>
                </li>
                <li class="flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-blue-50 cursor-pointer">
                    <img src="{{ asset('images/fileInactive.png') }}" alt="Reports" class="w-10 h-10">
                    <span class="text-md font-medium">Reports</span>
                </li>
            </ul>
        </nav>

        <!-- Bottom Section: User Info -->
                <!-- User Info with Glowing Circle -->
        <div class="px-6 py-4 border-t border-gray-200 mt-auto flex items-center gap-4">
            <!-- Glowing Circle with A -->
            <div class="w-12 h-12 flex items-center justify-center rounded-full text-[#155DFC] font-bold text-lg bg-[#DBEAFE] bg-opacity-50">
                A
            </div>

            <!-- User Info -->
            <div class="flex flex-col">
                <h2 class="font-semibold">Administrator</h2>
                <p class="text-gray-500 text-sm">Administrator</p>
            </div>
        </div>

        <!-- Sign Out Section -->
        <div class="px-6 py-2 flex text-left">
            
            <button class="text-gray-600 px-4 mb-4 rounded hover:bg-red-600 transition"><i class="fas fa-right-from-bracket text-gray-500"></i> Sign out</button>
        </div>

    </aside>
</div>
