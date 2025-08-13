<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div>
        <header>
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">About Us</a></li>
                </ul>
            </nav>
        </header>
    </div>

    @section('main') {{-- section that we create in the specific page and call it here --}} 
    @show   {{-- here the @show is neccessory to call if you not call it the main section of the page will not show --}}
    <footer>
        <p>Footer Content</p>
    </footer>
</body>
</html>