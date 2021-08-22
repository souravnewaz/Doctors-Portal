<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen text-gray-600 bg-gray-100">
    <main class="flex-grow min-h-screen">
        <div class="grid grid-cols-5 p-5 bg-gradient-to-r from-green-400 to-blue-500">
            <div class="flex flex-col md:flex-row md:justify-between col-span-5 md:col-start-2 md:col-span-3 ">
                <div class="text-2xl text-white font-bold text-center">
                    <a href="/">Doctors Portal</a>
                </div>
                <div class="  mt-5 text-xs md:mt-0 md:text-base  flex justify-center">
                    <a class="text-white hover:bg-white hover:text-blue-500 px-4 py-2 rounded" href="/">Home</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-4 py-2 rounded" href="/departments">Departments</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-4 py-2 rounded" href="/blogs">Blogs</a>
                    <a class="text-white hover:bg-white hover:text-blue-500 px-4 py-2 rounded" href="/questions">Q/A</a>
                    
                </div>
            </div>
            
            @if(Session::get('user_type')== 'user')
            <div class="flex justify-center mt-5 text-xs md:mt-0 md:text-base col-span-5 md:col-span-1">
                <a class="text-white hover:bg-white hover:text-blue-500 px-4 py-2 rounded" href="/profile/{{ Session::get('user')}}">Profile</a>
                <a class="text-white hover:bg-white hover:text-blue-500 px-4 py-2 rounded" href="/logout">Logout</a>
            </div>
            @else
            <div class="flex justify-center mt-5 text-xs md:mt-0 md:text-base col-span-5 md:col-span-1">
                <a class="text-white hover:bg-white hover:text-blue-500 px-4 py-2 rounded-full mr-2" href="/login">Login</a>
                <a class="text-white hover:bg-white hover:text-blue-500 px-4 py-2 rounded-full" href="/signup">Signup</a>
            </div>
            @endif
        </div>
        
        <div class="grid grid-cols-5 ">
            <div class="col-span-5 md:col-start-2 md:col-span-3">
                @yield('content')
            </div>
        </div>
        
    </main>    

    <footer>
        <div class="flex justify-center bg-gray-700 p-5">
            <p class="text-white">© 2021 Doctors Portal</p>
        </div>
    </footer>
    
</body>
</html>