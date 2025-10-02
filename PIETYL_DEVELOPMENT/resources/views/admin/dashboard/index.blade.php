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
<body>
    <div class="flex h-screen">
        <aside class="w-64 h-screen bg-white shadow-lg fixed">
            @include('admin.dashboard.sidebar')
        </aside>

        <div class="ml-64 flex-1 flex flex-col overflow-auto">
            <div class="sticky top-0 z-10 bg-white shadow">
                @include('admin.dashboard.navbar')
            </div>
            <!-- Other page content -->
        </div>
    </div>
</body>