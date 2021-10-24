<!--Header Start-->
<header id="sc-header" class="sc-header">
    <!-- Topbar Area Start -->
    <div class="topbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <ul class="topbar-contact">
                        <li>
                            <i class="flaticon flaticon-call"></i>
                            <a href="tel:+880 1973-080878">Call: +880 1973-080878</a>
                        </li>
                        <li>
                            <i class="flaticon flaticon-mail"></i>
                            <a href="mailto:info@3ischooling.com">info@3ischooling.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 text-end">
                    <ul class="topbar-right">
                        <li class="login-register">
                            @guest
                            <i class="fa fa-sign-in"></i>
                            <a href="{{ route('login') }}">Login</a> / <a href="{{ route('register') }}">
                            Register</a>
                            @else
                            {{ Auth::user()->name }} | &nbsp;&nbsp;&nbsp;<i class="fa fa-sign-out"></i>
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Logout
                            </a> / <a href="{{ route('profilemenu') }}">Profile</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            @endguest
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Topbar Area End -->

<!-- Menu Start -->
<div class="menu-area menu-sticky wow slideInDown" style="width: 100%;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo-cat-wrap">
                    <div class="logo-part" style="max-width: 60px; max-height: 50px;">
                        <a href="{{ route('home') }}" >
                            <img src="{{ asset('3i_school') }}/assets/images/logo.png" alt="Logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 align-items-center d-flex text-end justify-content-end">
                <div class="sc-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu"> <a class="sc-menu-toggle"> <i class="fa fa-bars"></i> </a> </div>
                        <nav class="sc-menu">

                            <ul class="nav-menu">
                                <li ><a href="{{ route('home') }}">Home</a> </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('schooling_menu') }}">Schooling</a>
                                                                                         
                                    
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{ route('admission') }}">Pre- University</a>
                                    <ul class="sub-menu">

                                        <li> <a href="{{ route('admission.english') }}">English For Admission</a> </li>
                                        <li><a href="{{ route('admission.maths') }}">Maths For Admission</a> </li>
                                        <li><a href="{{ route('admission.medical') }}">Medical For Admission</a> </li>
                                        <li><a href="{{ route('admission.physics') }}">Physics For Admission</a></li>
                                        <li> <a href="{{ route('admission.electrical') }}">Electrical Circuit Foundation</a> </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"> <a href="{{ route('mock_test_menu') }}">Mock Tests</a>
                                    <ul class="sub-menu">
                                        <li> <a href="{{ route('admin.minquiz') }}">Short Quiz</a> </li>

                                        {{-- <li class="menu-item-has-children current-menu-item"> <a href="Test_SSC.php">SSC</a>
                                            <ul class="sub-menu">
                                                <li><a href="SSCMockPyhsics.php">Physics SSC</a></li>
                                                <li><a href="SSCMockChemistry.php">Chemistry SSC</a></li>
                                                <li><a href="SSCMockBiology.php">Biology SSC</a></li>
                                                <li><a href="SSCMockMaths.php">Math For SSC</a></li>
                                                <li><a href="SSCMockHigherMaths.php"> Higher Math For SSC</a></li>
                                            </ul>

                                            <li class="menu-item-has-children current-menu-item"> <a href="Test_HSC.php">HSC</a>
                                                <ul class="sub-menu">
                                                    <li><a href="HSCMockPhysics.php">Physics HSC</a></li>
                                                    <li><a href="HSCMockChemistry.php">Chemistry HSC</a></li>
                                                    <li><a href="HSCMockBiology.php">Biology HSC</a></li>
                                                    <li><a href="HSCMockMaths.php">Math For HSC</a></li>
                                                    <li><a href="HSCMockHigherMaths.php"> Higher Math For HSC</a></li>
                                                    <li><a href="HSCMockICT.php"> ICT For HSC</a></li>
                                                </ul>
                                            </li> --}}

                                            @foreach($parentCategories as $category)

                                            <li class="menu-item-has-children "> <a href="{{ route('mock_test', $category->slug ) }}">{{ $category->name }}</a>

                                               @if(count($category->subcategory))

                                               @include('3i_school.partials.sub_category', ['subcategories' => $category->subcategory])

                                               @endif

                                           </li>

                                           @endforeach

                                       </ul>
                                   </li>
                                   <!--
                                   <li> <a href="{{ route('courses') }}">All Courses</a></li>
                                    -->
                                   <li class="menu-item-has-children"><a href="{{route('higherstudies')}}">Higher Studies</a>
                                        <ul class="sub-menu">
                                           
                                            <li><a href="{{route('careercounselling')}}">Career Councelling</a></li>
                                            <li><a href="{{route('ielts')}}">IELTS</a></li>
                                            <li><a href="{{route('gre')}}">GRE</a></li>
                                            <li><a href="{{route('aptitude')}}">Aptitude Test</a></li>
                                            <li><a href="{{route('consultation')}}">Choose Your Destination</a></li>
                                        </ul>
                                   </li>

                                   <li class="menu-item-has-children"><a href="{{ route('stem_menu') }}">STEM</a>
                                    <ul class="sub-menu">
                                        @foreach ($stemMenus as $menu)

                                        <li><a href="{{ route('stem',$menu->id) }}">{{ $menu->name }}</a> </li>
                                        @endforeach
                                          
                                        </ul>
                                    </li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                    </div>
                    <div class="expand-btn-inner text-end">
                        <ul>
                            <li>
                                <a class="hidden-xs sc-search" data-bs-target="#search-modal" data-bs-toggle="modal" href="#"> <i class="flaticon flaticon-magnifying-glass"></i> </a>
                            </li>
                        </ul>
                        <span>
                            <a id="nav-expander" class="nav-expander">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
    <!-- Canvas Menu start -->
    <nav class="right_menu_togle hidden-md">
        <div class="close-btn">
            <div id="nav-close">
                <div class="line">
                    <span class="line1"></span><span class="line2"></span>
                </div>
            </div>
        </div>
        <div class="canvas-logo">
            <a href="index.php"><img src="{{ asset('3i_school') }}/assets/images/Logo-2-extend.png" alt="logo"></a>
        </div>
        <div class="offcanvas-text">
            <p>3iSchooling provides smart educational content to make a digital community. we also working for career counseling, higher study and skill development future skilled citizens. digital contents ad Assessments for Class 0 to 12.</p>
        </div>
        <ul class="address-widget">
            <li> <i class="flaticon flaticon-call"></i> <a href="tel:+880 1973-080878">Call: +880 1973-080878</a> </li>
            <li> <i class="flaticon flaticon-mail"></i> <a href="mailto:info@3ischooling.com">info@3ischooling.com</a> </li>
            <li>
                <div class="desc">
                    <i class="flaticon flaticon-maps-and-flags"></i>  Uttara, Dhaka, Bangladesh.
                </div>
            </li>
        </ul>
        <div class="canvas-contact">
            <ul class="social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- Canvas Menu end -->
</header>
<!--Header End-->
