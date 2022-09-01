<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
       <ul>
            <li>
               <a href="{{route('home')}}">HomePage</a>
            </li>
            <li>
               <a href="{{route('comics.index')}}">Fumetti</a>
            </li>
            <li>
                <a href="{{route('comics.create')}}">Creazione Fumetti</a>
            </li>
       </ul>
    </header>
    <main>
        @yield('main_content')
    </main>
    
</body>
</html>