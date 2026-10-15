<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

    <div x-data="{ sidebarOpen: true }" class="flex h-screen overflow-hidden">
        @include('includes.sidebar')
        <div class="flex-1 flex flex-col overflow-hidden">
            @include('includes.navbar')
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
            @include('includes.footer')
        </div>
    </div>
</body>

</html>