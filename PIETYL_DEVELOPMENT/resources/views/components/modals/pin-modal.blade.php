<!-- PIN Modal -->
<div id="pinModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50 transition-opacity duration-300">
    <div id="pinModalContent" class="bg-white rounded-2xl shadow-lg w-[32rem] p-6 relative transform translate-y-full transition-transform duration-300">
        <!-- Close Button -->
        <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-800">
            <i class="fas fa-times"></i>
        </button>

        <!-- Header -->
        <h2 class="text-xl font-bold mb-4 text-left">Manual PIN Entry</h2>

        <!-- Description -->
        <div class="text-center py-2 mb-2">
            <i class="fas fa-key text-gray-600 text-3xl mb-2"
            style="text-shadow: 0 0 20px rgba(157, 182, 218, 1), 0 0 30px rgba(157, 182, 218, 0.8);"></i>
            <h3 class="font-semibold text-lg">Enter your PIN</h3>
            <p class="text-gray-500 text-sm">Use your 4-digit employee PIN to clock in or out</p>
        </div>

        <!-- PIN Display -->
        <div class="flex flex-col items-center mb-2">
            <!-- PIN dots -->
            <div class="flex justify-center text-2xl tracking-widest font-mono mb-3">
                <p>. . . .</p>
            </div>

            <!-- Instructions / QR suggestion -->
            <div class="text-center text-gray-600 text-sm flex flex-col items-center gap-1">
                <p>Enter all 4 digits of your PIN</p>
                <div class="flex items-center gap-2">
                    <i class="fas fa-qrcode text-gray-500"></i>
                    <span>Prefer QR? Try scanning again</span>
                </div>
            </div>
        </div>

        <!-- Keypad -->
        <div class="p-4 rounded-2xl w-full mx-auto mb-2">
            <div class="grid grid-cols-3 gap-3 justify-center w-max mx-auto text-center">
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">1</button>
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">2</button>
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">3</button>

                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">4</button>
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">5</button>
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">6</button>

                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">7</button>
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">8</button>
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">9</button>

                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition" disabled></button>
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">0</button>
                <button class="bg-gray-100 w-16 h-16 rounded-lg hover:bg-gray-200 transition">
                    <i class="fas fa-backspace"></i>
                </button>
            </div>
        </div>

        <!-- Actions -->
        <div class="flex gap-3 justify-center">
            <button id="cancelBtn" class="bg-gray-200 px-6 py-3 rounded-lg hover:bg-gray-300 transition">Cancel</button>
            <button class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">Clock In/Out</button>
        </div>
    </div>
</div>