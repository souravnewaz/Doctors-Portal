<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctors Portal</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="text-gray-600 bg-gray-100">
    <div class="flex justify-center bg-blue-500">
        <div class=" text-2xl font-bold p-5 text-white">
            <a href="/">Doctor's Portal</a>
        </div>
    </div>
    @yield('content')
    
</body>
</html>