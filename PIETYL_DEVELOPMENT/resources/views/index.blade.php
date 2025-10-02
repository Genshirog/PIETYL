<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIETYL</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <script src="{{ asset('js/tailwind.js')}}"></script>
    <link href="{{ asset('font_awesome/css/all.min.css')}}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('navbar')
    <div class="text-center mt-6 mb-6">
        <h1 class="text-3xl font-bold">Choose your module</h1>
        <h2 class="text-lg">Select the module you need to access. Each module is designed for specific roles</h2>
        <h2 class="text-lg">and Functions</h2>
    </div>
    <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-6">
        <!-- Cashiering -->
        <div class="bg-white rounded-2xl shadow-lg p-6 flex items-center gap-4">
            <img src="{{ asset('images/cashier.png') }}" alt="Cashier Image" class="w-40 h-40 rounded-xl object-cover">
            <div class="relative flex-1 text-center">
                <h2 class="text-xl font-bold mb-4">Cashiering</h2>
                
                <div class="flex items-center justify-center space-x-2 bg-gray-100 border rounded-lg p-1 mb-2">
                    <!-- Arrow Icon -->
                    <i class="fa-solid fa-arrow-trend-up text-green-500 text-2xl"></i>
                    
                    <!-- Text -->
                    <span class="text-md font-semibold">Today's Sales: P250.00</span>
                </div>
                
                <p class="text-sm text-gray-500">Cashier personnel only</p>
            </div>
        </div>

        <!-- Attendance -->
        <div class="bg-white rounded-2xl shadow-lg p-6 flex items-center gap-4">
            <img src="{{ asset('images/attendance.png') }}" alt="Attendance Image" class="w-40 h-40 rounded-xl object-cover">
            <div class="relative flex-1 text-center">
                <h2 class="text-xl font-bold mb-4">Attendance</h2>
                <div class="flex items-center justify-center space-x-2 bg-gray-100 border rounded-lg p-1 mb-2">
                    <!-- Arrow Icon -->
                    <i class="fa-solid fa-user-group text-blue-500 text-2xl"></i>
                    
                    <!-- Text -->
                    <span class="text-md font-semibold">Today's Records: 120</span>
                </div>
                <p class="text-sm text-gray-500">All employees</p>
            </div>
        </div>

        <!-- Inventory -->
        <div class="bg-white rounded-2xl shadow-lg p-6 flex items-center gap-4">
            <img src="{{ asset('images/inventory.png') }}" alt="Inventory Image" class="w-40 h-40 rounded-xl object-cover">
            <div class="flex-1 text-center">
                <h2 class="text-xl font-bold mb-4">Inventory</h2>
                <div class="flex items-center justify-center space-x-2 bg-gray-100 border rounded-lg p-1 mb-2">
                    <!-- Arrow Icon -->
                    <i class="fa-solid fa-warning text-orange-500 text-2xl"></i>
                    
                    <!-- Text -->
                    <span class="text-md font-semibold">3 Low Stock Alert</span>
                </div>
                <p class="text-sm text-gray-500">Inventory staff only</p>
            </div>
        </div>

        <!-- Admin Panel -->
        <div class="bg-white rounded-2xl shadow-lg p-6 flex items-center gap-4">
            <img src="{{ asset('images/admin.png') }}" alt="Admin Panel Image" class="w-40 h-40 rounded-xl object-cover">
            <div class="flex-1 text-center">
                <h2 class="text-xl font-bold mb-4">Admin Panel</h2>
                <div class="flex items-center justify-center space-x-2 bg-gray-100 border rounded-lg p-1 mb-2">
                    <!-- Arrow Icon -->
                    <i class="fa-solid fa-file-lines text-purple-500 text-2xl"></i>
                    
                    <!-- Text -->
                    <span class="text-md font-semibold">3 reports pending</span>
                </div>
                <p class="text-sm text-gray-500">Admin access required</p>
            </div>
        </div>
    </div>

    <footer class="fixed border-t border-gray-300 bottom-0 left-0 w-full bg-gray-100 py-4">
        <div class="text-center text-gray-600 text-sm">
            <p>Touch any module above to get started with your tasks</p>
        </div>
    </footer>
</body>
</html>