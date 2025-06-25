<div>

    @include ('common.header' , ['data'=>"this is user data from login page"])


    <h1>A view inside a folder created by using command</h1>
    <h2>and it is called from controller</h2>

    {{-- <h2>This user login -> {{$userNme}}</h2> --}}

    {{-- foreach loop in laravel --}}
    <div>
        @foreach ($users as $user )
        <h3>welcome : {{$user}}</h3>
        @endforeach
    </div>
        
    </div>


    {{-- if else condition on array  --}}
    <h4>Second user is {{$users[0]}}</h4>
    @if ($users[0]=== 'zahid')
        <h4>Welcome Zahid</h4>
    @elseif ($users[0]=== 'ahmad')
        <h4>Welcome Ahmad</h4>
    @elseif ($users[0]=== 'ali')
        <h4>Welcome Ali</h4>
    @elseif ($users[0]=== 'sami')
        <h4>Welcome Sami</h4>
    @else
        <h4>Welcome Guest</h4>
    @endif

    <div>
        @for($i=0;$i<=10;$i++)
        <h2>the number is : {{$i}}</h2>
        @endfor
    </div>
</div>
