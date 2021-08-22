<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="text-gray-600 bg-gray-100">
    <div class="flex justify-center bg-blue-500">
        <div class=" text-2xl font-bold p-5 text-white">
            <a href="/admin-dashboard">Doctor's Portal</a>
        </div>
    </div>

    <div class="grid md:grid-cols-6 gap-10 m-10 text-xs lg:text-sm text-gray-400">
        <div class="col-span-6 md:col-span-2 lg:col-span-1  ">
            <div class="bg-white grid grid-cols-1 shadow-lg divide-y divide-gray-100">
                <div class="p-3  hover:bg-blue-500 hover:text-white">
                    <a href="/all-notifications">Notifications</a>
                </div>
                <div class="p-3  hover:bg-blue-500 hover:text-white">
                    <a href="/doctors">Doctors</a>
                </div>
                <div class="p-3  hover:bg-blue-500 hover:text-white">
                    <a href="/users">Users</a>
                </div>
                <div class="p-3  hover:bg-blue-500 hover:text-white">
                    <a href="/all-appointments">Appointments</a>
                </div>
                <div class="p-3 hover:bg-blue-500 hover:text-white">
                    <a href="/all-blogs">Blogs</a>
                </div>
                <div class="p-3 hover:bg-blue-500 hover:text-white">
                    <a href="/all-questions">Questions</a>
                </div>
                <div class="p-3  hover:bg-blue-500 hover:text-white">
                    <a href="/wallet">Wallet</a>
                </div>
                <div class="p-3 hover:bg-blue-500 hover:text-white">
                    <a href="/all-refunds">Refunds</a>
                </div>
                <div class="p-3 hover:bg-blue-500 hover:text-white">
                    <a href="/">Logout</a>
                </div>
            </div>
            
        </div>

        <div class="col-span-6 md:col-span-4 lg:col-span-5">
            @yield('content')
        </div>
        
    </div>
    
</body>
</html>