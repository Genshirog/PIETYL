<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIETYL</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <script src="{{ asset('js/tailwind.js')}}"></script>
    <link href="{{ asset('font_awesome/css/all.min.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <aside class="w-64 h-screen bg-white shadow-lg fixed">
            @include('admin.employee.sidebar')
        </aside>

        <div class="ml-64 flex-1 flex flex-col overflow-auto">
            <div class="sticky top-0 z-10 bg-white shadow">
                @include('admin.employee.navbar')
            </div>
            <div class="w-full max-w-6xl mx-auto shadow rounded-2xl p-2 mb-6 mt-6" 
                style="background: linear-gradient(90deg, rgba(12, 175, 234, 0.2) 0%, rgba(25, 99, 22, 0.2) 100%);">
                <div class="relative w-full">
                    <!-- Tabs -->
                    <ul class="flex w-full font-medium text-gray-600 relative">
                        <li class="tab flex-1 text-center cursor-pointer py-2 relative z-10" data-tab="0">Attendance Logs</li>
                        <li class="tab flex-1 text-center cursor-pointer py-2 relative z-10" data-tab="1">Staff Directory</li>
                    </ul>

                    <!-- Moving bar -->
                    <div id="tabBar" 
                        class="absolute top-0 left-0 h-full w-1/2 bg-white rounded-2xl shadow transition-all duration-300 ease-in-out">
                    </div>
                </div>
            </div>
            <div id="tabContent">
                <div class="w-full max-w-6xl mx-auto flex gap-6 mt-2 tab-panel" data-tab="0">
                    <!-- Left Column (2x width) -->
                    <div class="flex-[2] space-y-4">
                        <div class="shadow rounded-2xl p-4"
                            style="background: linear-gradient(90deg, rgba(12, 175, 234, 0.2) 0%, rgba(25, 99, 22, 0.2) 100%);">
                            <h2 class="text-xl font-bold text-gray-800 ml-6">Daily Attendance Logs</h2>
                        </div>
                        <!-- Attendance Entry 1 -->
                        <div class="bg-white shadow rounded-xl p-4 flex justify-between items-center">
                            <div class="flex items-center space-x-3">
                                <!-- Avatar Circle -->
                                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold
                                            bg-gradient-to-br from-[#0CAFEA] to-[#196316]">
                                    JD
                                </div>
                                
                                <!-- Name + Role -->
                                <div>
                                    <h3 class="font-semibold text-lg">John Doe</h3>
                                    <p class="text-gray-500 text-sm">Cashier</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Check in</h4>
                                <p>8:15 AM</p>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Check out</h4>
                                <p>5:30 PM</p>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Hours</h4>
                                <p>8.5h</p>
                            </div>
                            <div class="text-center">
                                <span class="bg-orange-600 text-white text-sm font-semibold px-3 py-1 rounded-full mt-1">Late</span>
                            </div>
                        </div>

                        <!-- Repeat entries -->
                        <div class="bg-white shadow rounded-xl p-4 flex justify-between items-center">
                            <div class="flex items-center space-x-3">
                                <!-- Avatar Circle -->
                                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold
                                            bg-gradient-to-br from-[#0CAFEA] to-[#196316]">
                                    JD
                                </div>
                                
                                <!-- Name + Role -->
                                <div>
                                    <h3 class="font-semibold text-lg">John Doe</h3>
                                    <p class="text-gray-500 text-sm">Cashier</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Check in</h4>
                                <p>8:15 AM</p>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Check out</h4>
                                <p>5:30 PM</p>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Hours</h4>
                                <p>8.5h</p>
                            </div>
                            <div class="text-center">
                                <span class="bg-orange-600 text-white text-sm font-semibold px-3 py-1 rounded-full mt-1">Late</span>
                            </div>
                        </div>

                        <div class="bg-white shadow rounded-xl p-4 flex justify-between items-center">
                            <div class="flex items-center space-x-3">
                                <!-- Avatar Circle -->
                                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold
                                            bg-gradient-to-br from-[#0CAFEA] to-[#196316]">
                                    JD
                                </div>
                                
                                <!-- Name + Role -->
                                <div>
                                    <h3 class="font-semibold text-lg">John Doe</h3>
                                    <p class="text-gray-500 text-sm">Cashier</p>
                                </div>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Check in</h4>
                                <p>8:15 AM</p>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Check out</h4>
                                <p>5:30 PM</p>
                            </div>
                            <div class="text-center">
                                <h4 class="text-sm text-gray-500">Hours</h4>
                                <p>8.5h</p>
                            </div>
                            <div class="text-center">
                                <span class="bg-orange-600 text-white text-sm font-semibold px-3 py-1 rounded-full mt-1">Late</span>
                            </div>
                        </div>  
                    </div>

                    <!-- Right Column (1x width) -->
                <div class="flex-1 space-y-4">
                    <div class="shadow rounded-2xl p-4"
                        style="background: linear-gradient(90deg, rgba(234, 12, 12, 0.1) 0%, rgba(214, 150, 59, 0.1) 100%);">
                        <h2 class="text-xl font-bold text-gray-800">Pending Requests</h2>
                    </div>

                    <div class="bg-white shadow rounded-xl p-4 flex justify-between items-center">
                        <div>
                            <h4 class="font-semibold">John Doe</h4>
                            <p class="text-gray-500 text-sm">Cashier</p>
                        </div>
                        <div class="text-center">
                            <p>2024-04-13</p>
                            <p>wrong time</p>
                        </div>
                        <div class="rounded-xl w-12 h-12 flex items-center justify-center"
                            style="background: linear-gradient(180deg, #054A5B 0%, #15C6FC 100%);">
                            <i class="far fa-eye text-white text-2xl cursor-pointer"></i>
                        </div>
                    </div>
                    <div class="w-full max-w-6xl mx-auto shadow rounded-2xl p-4 mb-6 mt-6 bg-white">
                        <!-- Header -->
                        <h3 class="text-xl font-bold mb-4">Employee Performance</h3>
                        <div id="chart" class="w-full"></div>

                        <!-- Summary Stats -->
                        <div class="flex justify-around items-center text-center space-x-6">
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-blue-500 inline-block"></span>
                                <span class="text-gray-700 font-medium">Present:</span>
                                <span class="font-bold text-blue-600">63</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-yellow-500 inline-block"></span>
                                <span class="text-gray-700 font-medium">Late:</span>
                                <span class="font-bold text-yellow-600">20</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="w-3 h-3 rounded-full bg-red-500 inline-block"></span>
                                <span class="text-gray-700 font-medium">Absent:</span>
                                <span class="font-bold text-red-600">5</span>
                            </div>
                        </div>
                    <!-- Add more pending requests as needed -->
                    </div>
                </div>
            </div>
            <div class="tab-panel hidden" data-tab="1">
                <div class="w-full max-w-6xl mx-auto flex gap-6 mt-4">
                    <!-- Left Column: Employee Cards -->
                    <div class="flex-1 space-y-4">
                        <div class="flex justify-between items-center">
                            <button class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg">Add Employee</button>
                        </div>

                        <!-- Employee Cards Container -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Employee Card 1 -->
                            <div class="bg-white shadow rounded-xl p-6 space-y-4">
                                <div class="flex items-center space-x-3">
                                <!-- Avatar Circle -->
                                <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold
                                            bg-gradient-to-br from-[#0CAFEA] to-[#196316]">
                                    JD
                                </div>
                                
                                <!-- Name + Role -->
                                <div>
                                    <h3 class="font-semibold text-lg">John Doe</h3>
                                    <p class="text-gray-500 text-sm">Cashier</p>
                                </div>
                            </div>
                                <div class="space-y-3 text-sm">
                                    <div class="flex justify-between items-center">
                                        <span class="font-medium">Today's Status:</span>
                                        <span class="bg-green-600 text-white text-xs font-semibold px-4 py-1 rounded-full">Present</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Attendance:</span>
                                        <span>95%</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">This Month:</span>
                                        <span>18/22 days</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Overtime:</span>
                                        <span>12h</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Employee Card 2 -->
                            <div class="bg-white shadow rounded-xl p-6 space-y-4">
                                <div class="flex items-center space-x-3">
                                    <!-- Avatar Circle -->
                                    <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold
                                                bg-gradient-to-br from-[#0CAFEA] to-[#196316]">
                                        JD
                                    </div>
                                    
                                    <!-- Name + Role -->
                                    <div>
                                        <h3 class="font-semibold text-lg">John Doe</h3>
                                        <p class="text-gray-500 text-sm">Cashier</p>
                                    </div>
                                </div>
                                <div class="space-y-3 text-sm">
                                    <div class="flex justify-between items-center">
                                        <span class="font-medium">Today's Status:</span>
                                        <span class="bg-orange-600 text-white text-xs font-semibold px-4 py-1 rounded-full">Absent</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Attendance:</span>
                                        <span>90%</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">This Month:</span>
                                        <span>18/22</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Overtime:</span>
                                        <span>2h</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Edit Employee -->
                    <div class="flex-1">
                        <!-- Outer Card -->
                        <div class="bg-white shadow rounded-xl p-4 space-y-4">
                            <h2 class="text-xl font-bold">Edit Employee</h2>
                            <p>Update details for John Doe</p>
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Left Column -->
                                <div class="space-y-4">
                                    <!-- Full Name Card -->
                                    <h4 class="font-medium">Full Name*</h4>
                                    <div class="bg-gray-50 shadow rounded-lg p-4">
                                        <span>John Doe</span>
                                    </div>

                                    <!-- Role Card -->
                                    <h4 class="font-medium">Role*</h4>
                                    <div class="bg-gray-50 shadow rounded-lg p-4">
                                        <span>Cashier</span>
                                    </div>

                                    <!-- Email Card -->
                                    <h4 class="font-medium">Email Address*</h4>
                                    <div class="bg-gray-50 shadow rounded-lg p-4">
                                        <span>john.doe@company.com</span>
                                    </div>

                                    <!-- Phone Card -->
                                    <h4 class="font-medium">Phone Number</h4>
                                    <div class="bg-gray-50 shadow rounded-lg p-4">
                                        <span>+63 912 345 6789</span>
                                    </div>
                                </div>

                                <!-- Right Column -->
                                <div class="space-y-4">
                                    <!-- Monthly Salary Card -->
                                    <h4 class="font-medium">Monthly Salary (P)*</h4>
                                    <div class="bg-gray-50 shadow rounded-lg p-4">
                                        <span>25000</span>
                                    </div>

                                    <!-- Start Date Card -->
                                    <h4 class="font-medium">Start Date*</h4>
                                    <div class="bg-gray-50 shadow rounded-lg p-4">
                                        <span>01/15/2023</span>
                                    </div>

                                    <!-- Current Performance Card -->
                                    <h4 class="font-medium">Current Performance</h4>
                                    <div class="bg-gray-50 shadow rounded-lg p-4">
                                        <div class="flex justify-between">
                                            <p>Attendance Rate:</p>
                                            <span>95%</span>
                                        </div>
                                        <div class="flex justify-between">
                                            <p>Overtime Hours:</p>
                                            <span>12h</span>
                                        </div>
                                    </div>

                                    <!-- Employee Benefits Card -->
                                    <h4 class="font-medium">Employee Benefits</h4>
                                    <div class="bg-gray-50 shadow rounded-lg p-4">
                                        <div class="space-y-1">
                                            <label><input type="checkbox" checked> Health Insurance</label><br>
                                            <label><input type="checkbox" checked> SSS Contribution</label><br>
                                            <label><input type="checkbox" checked> Pag-IBIG Contribution</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="block w-3/4 max-w-2xl mx-auto bg-green-500 text-white px-4 py-2 rounded-lg mt-4">Update Employee</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
var options = {
  series: [63, 20, 5],
  chart: {
    height: 350,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      startAngle: -90,
      endAngle: 90,
      hollow: { size: '20%' },
      track: { background: '#E0E0E0' },
      dataLabels: { show: false }
    }
  },
  colors: ['#001ec8ff', '#FFC107', '#F44336'],
  labels: ['Present', 'Late', 'Absent']
};
new ApexCharts(document.querySelector("#chart"), options).render();
</script>
<script>
const tabs = document.querySelectorAll('.tab');
const tabBar = document.getElementById('tabBar');
const tabPanels = document.querySelectorAll('.tab-panel');

tabs.forEach((tab, index) => {
  tab.addEventListener('click', () => {
    // Slide the moving bar
    tabBar.style.transform = `translateX(${index * 100}%)`;

    // Show only the selected tab panel
    tabPanels.forEach(panel => panel.classList.add('hidden'));
    document.querySelector(`.tab-panel[data-tab="${index}"]`).classList.remove('hidden');

    // Highlight active tab text
    tabs.forEach(t => t.classList.remove('text-black', 'font-bold'));
    tab.classList.add('text-black', 'font-bold');
  });
});
</script>
</body>
</html>