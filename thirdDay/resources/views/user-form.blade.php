<div>
    <h1 style="text-align:center; color:lightgreen; background-color: yellow;">input fields and forms in laravel</h1>

    <style>
        .input-field {
            border: 2px solid green;
            border-radius: 10px;
            padding: 10px;
            color: orange;
        }

        .input-field::placeholder {
            color: orange;
        }

        button {
            background-color: rgba(70, 70, 240, 0.783);
            color: white;
            font-size: 15px;
            padding: 10px;
            border: none;
            border-radius: 10px
        }

        button:hover {
            background-color: blue;
            cursor: pointer;
        }
        .input-error{
            border: 2px solid red;
        }
    </style>



    <div>
        {{-- {{print_r($errors->all())}} --}}

        {{-- here is if you want to show all the errors in one place --}}
        {{-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div>
            <h3 style="color: red; background-color: lightyellow;">{{$error}}</h3>
        </div>
        @endforeach
        @endif --}}


        <form action="user-form" method="post">

            @csrf

            <div class="input-wrapper">
                <input type="text" placeholder="Enter user name" name="userName" value="{{old('userName')}}" class="input-field {{$errors->first('userEmail')?'input-error':''}}" style="margin-bottom: 10px"><br>
                <span style="color: red; background-color: yellow; padding: 5px; border-radius: 10px;">@error('userName'){{$message}}@enderror</span>
            </div><br>

            <div class="input-wrapper">
                <input type="email" placeholder="Enter user email" name="userEmail" value="{{old('userEmail')}}" class="input-field {{$errors->first('userEmail')?'input-error':''}}">

                <span>@error('userEmail'){{$message}}@enderror</span>
            </div>

            <br>

            <div class="input-wrapper">
                <input type="text" placeholder="Enter user city" name="userCity" class="input-field {{$errors->first('userEmail')?'input-error':''}}">
                <span>@error('userCity'){{$message}}@enderror</span>
            </div>


            <br>

            <div class="input-wrapper">
                <button>Add New User</button>
            </div>
        </form>
    </div>
</div>
