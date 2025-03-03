<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 h-screen bg-blue-500 overlay sm:shadow-none overlay-open:translate-x-0 drawer drawer-start max-w-64 sm:z-0 sm:flex sm:translate-x-0"
        role="dialog" tabindex="-1">
        <div class="text-white drawer-header">
            <div class="flex items-center gap-3 p-0">
                <span class="icon-[tabler--tag-filled] text-2xl"></span>
                <h3 class="text-2xl font-bold text-white drawer-title">QUOTATION</h3>
            </div>
        </div>
        <div class="flex flex-col justify-between h-full px-2 drawer-body">
            <ul class="menu p-0 text-xl space-y-[350px] font-semibold">
                <div class="p-4 space-y-4">
                    <li>
                        <a href="{{ route('index') }}" id="index">
                            <span class="icon-[tabler--book-filled] text-2xl"></span>
                            Request
                        </a>
                    </li>
                    <li>
                        <a href="{{route('myrequest')}}" id="myreq">
                            <span class="icon-[tabler--bookmarks-filled] text-2xl"></span>
                            My Request
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon-[tabler--clipboard-check-filled] text-2xl"></span>
                            Job Completed
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon-[tabler--clipboard-x-filled] text-2xl"></span>
                            Job Canceled
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon-[tabler--clipboard-text-filled] text-2xl"></span>
                            Manual
                        </a>
                    </li>
                </div>
                <div class="p-4">
                    <li>
                        <a href="#">
                            <span class="icon-[tabler--logout-2] text-2xl"></span>
                            Main Menu
                        </a>
                    </li>
                </div>
            </ul>
        </div>
    </aside>

    <section class="flex flex-col ms-[240px]">
        <!-- Your app content here -->
        <div class="flex justify-start p-6 bg-gray-300 md:justify-end">
            <h1 class="text-2xl">Welcome to Quotation</h1>
        </div>
        <div class="p-6">
            @yield('content')
        </div>
    </section>

    @stack('activeNav')

</body>

</html>
