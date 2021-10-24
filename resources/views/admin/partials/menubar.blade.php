<div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <a href="{{ route('admin.dashboard') }}"><img alt=""
                src="{{ URL::to('assets/images/Logo-2-extend.png') }}" width="82" height="27"></a>
            <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
     <i class="material-icons ttr-fixed-icon">gps_fixed</i>
     <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
 </div> -->
 <div class="ttr-sidebar-toggle-button">
    <i class="ti-arrow-left"></i>
</div>
</div>

<!-- side menu logo end -->
<!-- sidebar menu start -->
<nav class="ttr-sidebar-navi">
    <ul>
        <li class="{{ request()->routeIs('admin.dashboard') ? 'show' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="ttr-material-button">
                <span class="ttr-icon"><i class="ti-home"></i></span>
                <span class="ttr-label">Dashborad</span>
            </a>
        </li>

        <li class="ttr-seperate"></li>

        <li class="{{ request()->routeIs('quizCategory*') || request()->routeIs('question*') ? 'show' : '' }}">
            <a href="javascript:void(0)" class="ttr-material-button">
                <span class="ttr-icon"><i class="ti-help-alt"></i></span>
                <span class="ttr-label">Quiz</span>
                <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
            </a>
            <ul>
                <li class="{{ request()->routeIs('quizCategory*') ? 'show' : '' }}">
                    <a href="{{ route('quizCategory.index') }}" class="ttr-material-button">
                        <span class="ttr-label">Quiz Category</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('question*') ? 'show' : '' }}">
                    <a href="{{ route('question.index') }}" class="ttr-material-button">
                        <span class="ttr-label">Quizzes List</span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('question*') ? 'show' : '' }}">
                    <a href="{{ route('admin.gquiz') }}" class="ttr-material-button">
                        <span class="ttr-label">Quizzes from Google Form</span>
                    </a>
                </li>
               
            </ul>
        </li>

        <li class="{{ request()->routeIs('admin.course') ? 'show' : '' }}">
            <a href="{{ route('admin.course') }}" class="ttr-material-button">
                <span class="ttr-icon"><i class="ti-book"></i></span>
                <span class="ttr-label">Courses</span>
                <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
            </a>
            <ul>
                <li class="{{ request()->routeIs('admin.course') ? 'show' : '' }}">
                    <a href="{{ route('admin.course') }}" class="ttr-material-button">
                        <span class="ttr-label">All Courses </span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('admin.course.category') ? 'show' : '' }}">
                    <a href="{{ route('admin.course.category') }}" class="ttr-material-button">
                        <span class="ttr-label">Course Category</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('admin.admission') ? 'show' : '' }}">
            <a href="{{ route('admin.admission') }}" class="ttr-material-button">
                <span class="ttr-icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                <span class="ttr-label">Admission</span>
                <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
            </a>
            <ul>
                <li class="{{ request()->routeIs('admin.admission') ? 'show' : '' }}">
                    <a href="{{ route('admin.admission') }}" class="ttr-material-button">
                        <span class="ttr-label">All Courses </span>
                    </a>
                </li>
                <li class="{{ request()->routeIs('users*') ? 'show' : '' }}">
                    <a href="{{ route('admin.admission.subject') }}" class="ttr-material-button">
                        <span
                        class="ttr-label">Admission Subject</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="{{ request()->routeIs('admin.stem') ? 'show' : '' }}">
            <a href="{{ route('admin.stem') }}" class="ttr-material-button">
                <span class="ttr-icon"><i class="fa fa-flask" aria-hidden="true"></i></span>
                <span class="ttr-label">STEM</span>
                <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
            </a>
            <ul>
                <li class="{{ request()->routeIs('admin.stem') ? 'show' : '' }}">
                    <a href="{{ route('admin.stem') }}" class="ttr-material-button">
                        <span class="ttr-label">All Courses </span></a>
                    </li>
                    <li class="{{ request()->routeIs('users*') ? 'show' : '' }}">
                        <a href="{{ route('admin.stem.subject') }}" class="ttr-material-button">
                            <span class="ttr-label">STEM Subject</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="{{ request()->routeIs('admin.schooling') ? 'show' : '' }}">
                <a href="{{ route('admin.schooling') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                    <span class="ttr-label">Schooling</span>
                    <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                </a>
            <ul>
                <li class="{{ request()->routeIs('admin.schooling') ? 'show' : '' }}">
                    <a href="{{ route('admin.schooling') }}" class="ttr-material-button">
                        <span class="ttr-label">All Courses </span></a>
                    </li>
                    <li class="{{ request()->routeIs('users*') ? 'show' : '' }}">
                        <a href="{{ route('admin.schooling.subject') }}" class="ttr-material-button">
                            <span class="ttr-label">Schooling Subject</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="{{ request()->routeIs('admin.news') ? 'show' : '' }}">
                <a href="{{ route('admin.news') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="fa fa-newspaper-o" aria-hidden="true"></i></span>
                    <span class="ttr-label">News</span>
                    <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                </a>
                <ul>
                    <li class="{{ request()->routeIs('admin.news') ? 'show' : '' }}">
                        <a href="{{ route('admin.news') }}" class="ttr-material-button">
                            <span class="ttr-label">All News </span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.news.tag') ? 'show' : '' }}">
                        <a href="{{ route('admin.news.tag') }}" class="ttr-material-button">
                            <span class="ttr-label">News Tag</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="{{ request()->routeIs('admin.teacher') ? 'show' : '' }}">
                <a href="{{ route('admin.teacher') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="fa fa-user-secret" aria-hidden="true"></i></span>
                    <span class="ttr-label">Teacher</span>
                    <span class="ttr-arrow-icon"></span>
                </a>
            </li>

            <li class="{{ request()->routeIs('admin.testimonial') ? 'show' : '' }}">
                <a href="{{ route('admin.testimonial') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="fa fa-star-o" aria-hidden="true"></i></span>
                    <span class="ttr-label">Testimonial</span>
                    <span class="ttr-arrow-icon"></span>
                </a>
            </li>

            {{-- <li class="{{ request()->routeIs('admin.quiz') ? 'show' : '' }}">
                <a href="{{ route('admin.quiz') }}" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-view-list-alt"></i></span>
                    <span class="ttr-label">60minutesQuiz</span>
                </a>
            </li> --}}

            <li class="{{ request()->routeIs('roles*') || request()->routeIs('users*') ? 'show' : '' }}">
                <a href="javascript:void(0)" class="ttr-material-button">
                    <span class="ttr-icon"><i class="ti-user"></i></span>
                    <span class="ttr-label">My Profile</span>
                    <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                </a>
                <ul>
                    <li class="{{ request()->routeIs('users.guest') ? 'show' : '' }}">
                        <a href="{{ route('users.guest') }}" class="ttr-material-button">
                            <span
                            class="ttr-label">Guest Users </span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('users*') ? 'show' : '' }}">
                        <a href="{{ route('users.index') }}" class="ttr-material-button">
                            <span
                            class="ttr-label">Users & Roles</span>
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('roles*') ? 'show' : '' }}">
                        <a href="{{ route('roles.index') }}" class="ttr-material-button">
                            <span
                            class="ttr-label">Roles & Permissions</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="ttr-seperate"></li>
        </ul>
        <!-- sidebar menu end -->
    </nav>
    <!-- sidebar menu end -->
</div>
</div>
