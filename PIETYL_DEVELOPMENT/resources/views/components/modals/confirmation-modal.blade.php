<!-- Confirmation Modal -->
    <div id="confirmationModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50 transition-opacity duration-300">
        <div id="confirmationModalContent" class="bg-white rounded-2xl shadow-lg w-full max-w-xl p-6 relative transform translate-y-full transition-transform duration-300 overflow-y-auto max-h-[90vh]">
            
            <!-- Close Button -->
            <button id="closeConfirmation" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800">
                <i class="fas fa-times"></i>
            </button>

            <!-- Header -->
            <div class="text-left mb-4">
                <h2 class="text-xl font-bold">Request Attendance Correction</h2>
                <p class="text-gray-500 text-sm">Submit a correction request for John Doe</p>
            </div>

            <!-- Employee Info -->
            <div class="flex items-center gap-4 p-6 bg-gray-100 rounded-2xl shadow-lg min-h-[120px] mt-6 mb-6">
                <div class="text-gray-600 text-xl pl-4 pr-2">
                    <i class="far fa-user"
                        style="text-shadow: 0 0 20px rgba(91, 96, 102, 1), 0 0 30px rgba(91, 96, 102, 0.8);"></i>
                </div>
                <div class="ml-2">
                    <h3 class="font-bold text-gray-700 text-xl">John Doe</h3>
                    <p class="text-gray-500 text-sm mt-1">Request correction</p>
                </div>
            </div>

            <!-- Form Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                
                <!-- Left Column: Date & Correction Type -->
                <div class="flex flex-col gap-3">
                    <label class="font-semibold text-gray-700 flex items-center gap-2">
                        <i class="far fa-calendar"></i> Date*
                    </label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" value="09/10/2025">
                    
                    <label class="font-semibold text-gray-700 flex items-center gap-2">
                        <i class="far fa-arrow-down"></i> Correction Type*
                    </label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" value="Select correction type">

                    <label class="font-semibold text-gray-700 flex items-center gap-2">
                        <i class="far fa-clock"></i> Correct Time
                    </label>
                    <input type="text" class="w-full border rounded-lg px-3 py-2" value="--:--">
                    <p class="text-gray-500 text-sm">Enter the correct time that should have been recorded</p>
                </div>

                <!-- Right Column: Description & Info / Review Process -->
                <div class="flex flex-col gap-3">
                    <label class="font-semibold text-gray-700">Description*</label>
                    <textarea class="w-full border rounded-lg px-3 py-2 h-20 resize-none" placeholder="Please explain the situation in detail..."></textarea>
                    
                    <!-- Optional additional details field -->
                    <textarea class="w-full border rounded-lg px-3 py-2 h-20 resize-none" placeholder="Provide details about why this correction is needed"></textarea>

                    <!-- Info / Review Process -->
                    <div class="flex items-start gap-3 p-3 bg-blue-50 rounded-lg mt-4">
                        <div class="text-blue-600 text-2xl">
                            <i class="fas fa-circle-info text-sm text-blue-600"></i>
                        </div>
                        <div>
                            <h2 class="font-semibold text-gray-700">Request Review Process</h2>
                            <p class="text-gray-500 text-sm">Your request will be reviewed by management and you'll be notified of the decision.</p>
                        </div>
                    </div>
                </div>

            </div>


            <!-- Action Buttons -->
            <div class="flex gap-3 mt-4 justify-end">
                <button class="bg-gray-200 px-6 py-3 rounded-lg hover:bg-gray-300 transition">Cancel</button>
                <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Submit Request</button>
            </div>

        </div>
    </div>