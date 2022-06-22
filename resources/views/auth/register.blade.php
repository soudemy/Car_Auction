@extends('web.layout.layout')



@section('css')

@endsection






@section('main')
    <div class="container">
        <div class="login_holder">
            <h1>
                Register
            </h1>
            <div class="tab_content">
            <form action="{{route('register')}}" id="addUser" method="post" class="register"
                  enctype="multipart/form-data">
                @csrf

                <p class="utf_row_form utf_form_wide_block">
                    <label for="image">
                        <input type="file" class="input-text" name="image" id="image" value="{{old('image')}}"
                               placeholder="image"/>

                        @error('first_name')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>
                <p class="utf_row_form utf_form_wide_block">
                    <label for="first_name">
                        <input type="text" class="input-text" name="firstname" id="first_name" value="{{old('first_name')}}"
                               placeholder="First Name"/>

                        @error('first_name')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>

                <p class="utf_row_form utf_form_wide_block">
                    <label for="last_name">
                        <input type="text" class="input-text" name="lastname" id="last_name" value="{{old('last_name')}}"
                               placeholder="Last Name"/>

                        @error('last_name')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>

                <p class="utf_row_form utf_form_wide_block">
                    <label for="mobile">
                        <input type="number" class="input-text" name="mobile" id="mobile" value="{{old('mobile')}}"
                               placeholder="Mobile"/>

                        @error('mobile')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>

                <p class="utf_row_form utf_form_wide_block">
                    <label for="company_name">
                        <input type="text" class="input-text" name="company_name" id="company_name" value="{{old('company_name')}}"
                               placeholder="Company Name (optional)"/>

                        @error('company_name')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>

                <p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                        <input type="text" class="input-text" name="username" id="username" value="{{old('username')}}"
                               placeholder="Username"/>

                        @error('username')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>


                <p class="utf_row_form utf_form_wide_block">
                    <label for="country">
                        <select class="input-text" name="country_id" id="country" >
                            @foreach(\App\Models\Country::all() as $country)
                                <option value="{{$country->id}}">{{$country->title}}</option>
                            @endforeach
                        </select>

                        @error('username')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>

                <p class="utf_row_form utf_form_wide_block">
                    <label for="username">
                        <select class="input-text" name="city_id" id="username">
                            @foreach(\App\Models\City::all() as $city)
                                <option value="{{$city->id}}">{{$city->title}}</option>
                            @endforeach
                        </select>

                        @error('username')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>


                <p class="utf_row_form utf_form_wide_block">
                    <label for="email2">
                        <input type="email" class="input-text" name="email" id="email2"
                               placeholder="Email"/>

                        @error('email')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>

                <p class="utf_row_form utf_form_wide_block">
                    <label for="password1">
                        <input class="input-text" type="text" name="password" id="password1"
                               placeholder="Password"/>

                        @error('password')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>

                <p class="utf_row_form utf_form_wide_block">
                    <label for="password_confirmation">
                        <input class="input-text" type="text" name="password_confirmation" id="password_confirmation"
                               placeholder="Confirm Password"/>

                        @error('confirmed')
                        <small class="text-danger"> {{$message}}</small>
                        @enderror

                    </label>
                </p>
                <input type="submit" class="button border fw margin-top-10" name="register"
                       value="Register"/>
            </form>
        </div>
        </div>
    </div>


@endsection


{{--@section('script')--}}

{{--    <script src="{{asset('assets//web/scripts/jquery.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/jquery.validate.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/additional-methods.min.js')}}"></script>--}}
{{--    <script src="{{asset('assets//web/scripts/plugins/jquery-validate/messages_fa.min.js')}}"></script>--}}

{{--    <script>--}}

{{--        $("#addUser").validate({--}}

{{--            errorClass: "error-message",--}}

{{--            rules: {--}}
{{--                first_name: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                last_name: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                mobile: {--}}
{{--                    required: true,--}}
{{--                },--}}


{{--                username: {--}}
{{--                    required: true,--}}
{{--                    remote: {--}}
{{--                        url: "user_availability.php",--}}
{{--                        type: "post",--}}
{{--                        data:--}}
{{--                            {--}}
{{--                                register: function () {--}}
{{--                                    return $('#addUser :input[name="username"]').val();--}}
{{--                                }--}}
{{--                            }--}}
{{--                    }--}}
{{--                },--}}


{{--                email: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--                password: {--}}
{{--                    required: true,--}}
{{--                },--}}

{{--            },--}}
{{--            messages:{--}}
{{--                username:{--}}
{{--                    required: "Please enter your login.",--}}
{{--                    remote: jQuery.validator.format("{0} is already taken.")--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}


{{--@endsection--}}


