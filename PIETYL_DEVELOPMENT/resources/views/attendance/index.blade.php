<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/tailwind.js')}}"></script>
    <link href="{{ asset('font_awesome/css/all.min.css')}}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    @include('attendance.navbar')

    <!-- Main Content -->
    <div class="grid grid-cols-1 md:grid-cols-2 h-[calc(100vh-96px)]">
        
        <!-- Left Column (Attendance Scanner) -->
        <div class="flex flex-col items-center justify-center bg-gray-100">
            
            <!-- Scanner Card -->
            <div class="w-full max-w-lg bg-gray-50 border rounded-2xl shadow-lg p-6 text-center mb-6">
                
                <!-- Scanner Frame -->
                <div class="w-full h-80 border-2 border-dashed border-gray-300 rounded-lg flex flex-col items-center justify-center">
                    <i class="fas fa-qrcode text-gray-400 text-6xl mb-3"></i>
                    <p class="text-gray-500 text-base">Position your QR code here</p>
                </div>

                <!-- Start Scanning Button -->
                <button class="w-1/2 text-white py-3 rounded-lg mt-6 transition" 
                    style="background: linear-gradient(90deg, #054A5B 0%, #15C6FC 100%);">
                    Start Scanning
                </button>
            </div>

            <!-- PIN Option -->
            <div class="text-center">
                <p class="text-gray-500 mb-2">QR code not working?</p>
                <button class="flex items-center gap-2 px-4 py-2 border rounded-lg bg-white hover:bg-gray-200 transition">
                    <i class="fa-solid fa-key text-gray-500"></i>
                    Use PIN instead
                </button>
            </div>
        </div>  

        <!-- Right Column (Tabs + Status) -->
        <!-- Right Column (Tabs + Status + Info Cards) -->
        <div class="flex flex-col items-center justify-start bg-gray-100 p-6 w-full mt-6">

            <!-- Toggle bar -->
            <div class="w-full max-w-3xl bg-gray-50 shadow rounded-2xl p-2 mb-6">
                <div class="relative">
                    <!-- Tabs -->
                    <ul class="flex justify-around font-medium text-gray-600 relative">
                    <li class="tab flex-1 text-center cursor-pointer py-2 px-6 relative z-10" data-tab="0">Overview</li>
                    <li class="tab flex-1 text-center cursor-pointer py-2 px-6 relative z-10" data-tab="1">My History</li>
                    <li class="tab flex-1 text-center cursor-pointer py-2 px-6 relative z-10" data-tab="2">Requests</li>
                    </ul>

                    <!-- Moving "bar" -->
                    <div id="tabBar" 
                        class="absolute top-0 left-0 h-full bg-white rounded-2xl shadow transition-all duration-300 ease-in-out">
                    </div>
                </div>
            </div>

            <!-- Status Card -->
            <div id="tabContents" class="w-full max-w-3xl">
                <div class="tab-content" data-content="0">
                    <div class="flex flex-col bg-white shadow-lg rounded-2xl p-6 text-left mb-6 border-l-8 border-blue-500 h-40 justify-center">
                        <div class="flex items-center gap-3">
                            <i class="far fa-clock text-blue-600 text-3xl" 
                            style="text-shadow: 0 0 20px rgba(157, 182, 218, 1), 
                                            0 0 30px rgba(157, 182, 218, 0.8);"></i>
                            <div class="ml-6">
                                <h1 class="text-lg font-bold">Today's Status</h1>
                                <p class="text-gray-500">Not clocked in today</p>
                            </div>
                        </div>
                    </div>

                    <!-- Employee Info + Week Summary (2 columns) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <!-- Employee Info Card -->
                        <div class="bg-white shadow-lg rounded-xl p-6">
                            <div>
                                <i class="far fa-user text-blue-600 text-xl"></i>
                                <span class="font-bold text-gray-700 ml-2 mb-4 text-xl">Employee Info</span>
                            </div>
                            <div>
                                <p class="font-semibold">Name</p>
                                <p>John Doe</p>
                            </div>

                            <div class="mt-3">
                                <p class="font-semibold">Role</p>
                                <p>Cashier</p>
                            </div>

                            <div class="mt-3">
                                <p class="font-semibold">Employee ID</p>
                                <p>EMP001</p>
                            </div>
                        </div>

                        <!-- This Week Summary Card -->
                        <div class="bg-white shadow-lg rounded-2xl p-6">
                            <i class="far fa-calendar text-blue-600 text-xl"></i>
                            <span class="font-bold text-gray-700 mb-4 text-xl">This Week Summary</span>
                            <p class="flex justify-between mt-3">
                                <span class="font-semibold">Days Worked:</span>
                                <span>0</span>
                            </p>

                            <p class="flex justify-between mt-3">
                                <span class="font-semibold">Total Hours:</span>
                                <span class="text-blue-600">0.0h</span>
                            </p>

                            <p class="flex justify-between mt-3">
                                <span class="font-semibold">Overtime:</span>
                                <span class="text-red-500">0.0h</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-content hidden"  data-content="1">
                    <div class="mb-4 ml-2">
                        <label class="font-semibold text-gray-700 text-xl">Last 7 Days</label>
                    </div>

                    <!-- One record -->
                    <div class="flex justify-between items-center bg-white shadow rounded-lg p-4 mb-3">
                        <div>
                            <p class="font-semibold text-gray-800">9/15/2025</p>
                            <p class="text-gray-500 text-sm">Monday</p>
                        </div>
                        <p class="text-green-600 font-semibold">In: 6:27AM</p>
                    </div>

                    <!-- Repeat record -->
                    <div class="flex justify-between items-center bg-white shadow rounded-lg p-4 mb-3">
                        <div>
                            <p class="font-semibold text-gray-800">9/16/2025</p>
                            <p class="text-gray-500 text-sm">Tuesday</p>
                        </div>
                        <p class="text-green-600 font-semibold">In: 6:30AM</p>
                    </div>

                    <div class="flex justify-between items-center bg-white shadow rounded-lg p-4 mb-3">
                        <div>
                            <p class="font-semibold text-gray-800">9/17/2025</p>
                            <p class="text-gray-500 text-sm">Wednesday</p>
                        </div>
                        <p class="text-green-600 font-semibold">In: 6:45AM</p>
                    </div>
                    <div class="flex justify-between items-center bg-white shadow rounded-lg p-4 mb-3">
                        <div>
                            <p class="font-semibold text-gray-800">9/17/2025</p>
                            <p class="text-gray-500 text-sm">Thurday</p>
                        </div>
                        <p class="text-green-600 font-semibold">In: 6:50AM</p>
                    </div>
                </div>
                <div class="tab-content" data-content="2">

                </div>
            </div>
        </div>
    </div>
    <script>
        const tabs = document.querySelectorAll(".tab");
        const tabBar = document.getElementById("tabBar");
        const contents = document.querySelectorAll(".tab-content");

        function moveBar(element) {
            tabBar.style.width = `${element.offsetWidth}px`;
            tabBar.style.height = `${element.offsetHeight}px`;
            tabBar.style.left = `${element.offsetLeft}px`;
        }

        // Default position
        moveBar(tabs[0]);
        tabs[0].classList.add("text-blue-600", "font-bold");
        contents[0].classList.remove("hidden");

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                // Move bar
                moveBar(tab);

                // Active tab highlight
                tabs.forEach(t => t.classList.remove("text-blue-600", "font-bold"));
                tab.classList.add("text-blue-600", "font-bold");

                // Show correct content
                const index = tab.getAttribute("data-tab");
                contents.forEach(c => c.classList.add("hidden"));
                document.querySelector(`.tab-content[data-content="${index}"]`).classList.remove("hidden");
            });
        });
    </script>
</body>
</html>
