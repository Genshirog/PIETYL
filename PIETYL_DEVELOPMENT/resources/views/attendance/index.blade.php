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
                <button class="w-1/2 text-white font-bold py-3 rounded-lg mt-6 transition" 
                    style="background: linear-gradient(90deg, #054A5B 0%, #15C6FC 100%);">
                    Start Scanning
                </button>
            </div>

            <!-- PIN Option -->
            <div class="text-center">
                <p class="text-[#475569] mb-2">QR code not working?</p>
                <button id="usePinBtn" class="flex items-center gap-2 px-4 py-2 border rounded-full bg-white hover:bg-gray-200 transition">
                    <i class="fa-solid fa-key text-[#475569]"></i>
                    Use PIN instead
                </button>
            </div>
        </div>  

        <!-- Right Column (Tabs + Status) -->
        <!-- Right Column (Tabs + Status + Info Cards) -->
        <div class="flex flex-col items-center justify-start bg-gray-100 p-6 w-full mt-6">
            @include('components.tabs.attendance-tabs',['activeTab' => 0])
            <div id="tabContents" class="w-full max-w-3xl">
                @include('components.tabs.attendance-overview')
                @include('components.tabs.attendance-history')
                @include('components.tabs.attendance-request')
            </div>
        </div>
    </div>

    @include('components.modals.pin-modal')
    @include('components.modals.confirmation-modal')

    <script src="{{ asset('js/attendance.js') }}"></script>
</body>
</html>
