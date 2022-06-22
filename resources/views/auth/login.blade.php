@extends('web.layout.layout')



@section('main')

    <div class="container">

        <div class="login_holder">
            <h1>
                Login
            </h1>
            <form action="{{route('login')}}" method="post">
                @csrf

                <div>
                    <lable>Email</lable>
                    <input type="email" name="email">
                    @error('email')
                    <p>{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <lable>password</lable>
                    <input type="password" name="password">
                    @error('password')
                    <p>{{$message}}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="button">Login</button>
                </div>


            </form>


{{--            <form action="{{route('password.request')}}">--}}
{{--                @csrf--}}
{{--                <div>--}}
{{--                    <button type="submit" class=" btn-primary">Forget Password</button>--}}
{{--                </div>--}}
{{--            </form>--}}

        </div>



    </div>



@endsection





