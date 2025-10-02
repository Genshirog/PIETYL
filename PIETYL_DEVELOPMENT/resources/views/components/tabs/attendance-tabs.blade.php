<!-- Toggle bar -->
            <div class="w-full max-w-3xl shadow rounded-2xl p-2 mb-6" style="background: linear-gradient(90deg, rgba(12, 175, 234, 0.2) 100%, rgba(25, 99, 22, 0.2) 0%);">
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