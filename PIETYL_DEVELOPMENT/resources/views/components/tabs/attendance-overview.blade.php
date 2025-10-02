<!-- Status Card -->

    <div class="tab-content" data-content="0">
        <div class="flex flex-col bg-white shadow-lg rounded-2xl p-6 text-left mb-6 border-l-8 border-blue-500 h-40 justify-center">
            <div class="flex items-center gap-3">
                <i class="far fa-clock text-blue-600 text-3xl" 
                style="text-shadow: 0 0 20px rgba(157, 182, 218, 1), 
                                0 0 30px rgba(157, 182, 218, 0.8);"></i>
                <div class="ml-6">
                    <h1 class="text-lg text-[#164E63] font-bold">Today's Status</h1>
                    <p class="text-gray-500">Not clocked in today</p>
                </div>
            </div>
        </div>

        <!-- Employee Info + Week Summary (2 columns) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            
            <!-- Employee Info Card -->
            <div class="bg-white shadow-lg rounded-xl p-6">
                <div class="mb-4">
                    <i class="far fa-user text-[#164E63] text-xl"></i>
                    <span class="font-bold text-[#164E63] ml-2 text-xl">Employee Info</span>
                </div>
                <div>
                    <p class="font-semibold text-[#164E63]">Name</p>
                    <p class="text-[#164E63]">John Doe</p>
                </div>

                <div class="mt-3">
                    <p class="font-semibold text-[#164E63]">Role</p>
                    <p class="text-[#164E63]">Cashier</p>
                </div>

                <div class="mt-3">
                    <p class="font-semibold text-[#164E63]">Employee ID</p>
                    <p class="text-[#164E63]">EMP001</p>
                </div>
            </div>

            <!-- This Week Summary Card -->
            <div class="bg-white shadow-lg rounded-2xl p-6">
                <i class="far fa-calendar text-blue-600 text-xl"></i>
                <span class="font-bold text-[#164E63] ml-2 mb-4 text-xl">This Week Summary</span>
                <p class="flex justify-between mt-3">
                    <span class="font-semibold text-[#164E63]">Days Worked:</span>
                    <span>0</span>
                </p>

                <p class="flex justify-between mt-3">
                    <span class="font-semibold text-[#164E63]">Total Hours:</span>
                    <span class="text-blue-600">0.0h</span>
                </p>

                <p class="flex justify-between mt-3">
                    <span class="font-semibold text-[#164E63]">Overtime:</span>
                    <span class="text-red-500">0.0h</span>
                </p>
            </div>
        </div>
    </div>