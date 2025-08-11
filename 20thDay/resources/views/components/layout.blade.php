<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <div>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">About</a>
            </li>
            <li>
                <a href="">Login</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ul>
    </div>

    {{-- Component called here --}}
    <div>
        {{$main}}
    </div>

    

    <div class="footer">
        <p>Footer Page</p>
    </div>
    <style>
        .footer p{
            position: absolute;
            bottom: 0;
            background-color: skyblue;
            width: 100%;
            margin: 0;
            padding:10px;
            text-align: center;
        }
        li{
            display: inline;
            text-decoration: none;
        }
    </style>
</body>
</html>