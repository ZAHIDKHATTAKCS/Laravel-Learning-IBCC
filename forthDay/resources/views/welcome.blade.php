<div>
    <h1>Welcome Page</h1>

    <a href="/about">About Page</a>

    {{-- using of to function --}}
    <p>This home URL is created by using to function direct url without Creating Routes</p>
    <a href="{{URL::to('/home',extra: ['zahid'])}}">HomePage</a>

    <br>
    <br>

    {{-- named routing direct url --}}
    <a href="{{Route('hm');}}">Named Routing homePage</a>
</div>