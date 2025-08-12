<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
</head>
<body>
    <div class="header">
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

    <div>
        {{$main}}
    </div>

    <footer class="footer">
        <p>Footer of the Page</p>
    </footer>


    <style>
        .footer p{
            position: absolute;
            bottom: 0;
            background-color: skyblue;
            width: 100%;
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        ul li {
            display: inline;
        }
        li a{
            text-decoration: none;
        }
    </style>
</body>
</html>