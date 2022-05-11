<header id="header_part">
    <div id="header">
        <div class="container">

            <div class="grid-layout">
                <div class="utf_right_side">

                    <a href="{{route('web.register')}}"
                       class="button border sign-in "><i
                            class="fa fa-sign-in"></i>Register</a>
                </div>
                    <div class="utf_right_side">

                    <a href="{{route('web.login')}}"
                       class="button border sign-in "><i
                            class="fa fa-sign-in"></i> Log In</a>
                </div>
                <div class="utf_right_side">


                    <a href="{{route('user.add-car')}}"
                       class="button border with-icon"><i
                            class="sl sl-icon-user"></i> Add Car</a>
                </div>
            </div>

            <div class="main_input_search_part utf_coupon_top">
                <div class="main_input_search_part_item">
                    <input type="text" placeholder="What are you looking for?" value=""/>
                </div>

                <button class="button" onclick="window.location.">Search</button>


            </div>

            <div class="utf_left_side">


                <div id="logo"><a href="index_1.html"><img src="images/logo.png" alt=""></a></div>


                <nav id="navigation" class="style_one">
                    <ul id="responsive">

                        <li><a href="{{route('user.ad-list')}}">Ad List</a>
                        <li><a href="{{route('user.add-car')}}">Add Car</a>

                        </li>
                        <li><a href="{{route('web.contact')}}">Contact</a>

                        </li>


                        <li><a href="{{route('web.roles')}}">Rules</a>

                        </li>
                        <li><a href="{{route('web.about-us')}}">About Us</a>

                        </li>

                    </ul>
                </nav>
                <div class="clearfix"></div>
            </div>


        </div>
    </div>
</header>


