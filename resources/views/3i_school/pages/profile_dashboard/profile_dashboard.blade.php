
<link rel="stylesheet" type="text/css" href="{{ asset('3i_school') }}/assets/css/profile_dashboard.css">





<!-- Sidebar -->
<!-- partial:index.partial.html -->
<div class="page-wrapper chiller-theme toggled mb-5">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">3i Schooling</a>
        <div id="close-sidebar">
          <i class="fa fa-window-close"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
         @if (File::exists(public_path("media/users/".Auth::user()-> photo||null)))
                <a href="profilemenu"> <img class="img-responsive img-rounded" src="{{ asset('media/users/' . Auth::user()-> photo) }}" alt="User picture"></a>
                @else
                <a href="profilemenu"> <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg" alt="User picture"></a>
                @endif
        </div>
        <div class="user-info">
          <span class="user-name"> {{Auth::user()-> name}}
          </span>
          {{-- <span class="user-role">Administrator</span> --}}
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>

      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Dashboard</span>

            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="profilemenu">User Profile
                  </a>
                </li>
                <li>
                  <a href="profilesettings">Change General Information</a>
                </li>
                <li>
                  <a href="profilesettingsadditional">Change Additional Information
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-money"></i>
              <span>Transaction</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Add Currency</a>
                </li>
                <li>
                  <a href="#">View Available Currency</a>
                </li>
                <li>
                  <a href="#">View Previous Transactions</a>
                </li>

              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-arrow-left"></i>
              <span>Previous Results</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="profilepreviousresult">15 Minutes Quiz</a>
                </li>
                <li>
                  <a href="#">All Quiz</a>
                </li>

              </ul>
            </div>
          </li>
          <li class="">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Social Platform</span>
            </a>

          </li>
         <li class="header-menu">
            <span>Our Services</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Consultation</span>

            </a>
          </li>
          <li>
            <a href="{{route('admin.minquiz')}}">
              <i class="fa fa-folder"></i>
              <span>Take A Quiz!</span>
            </a>
          </li>
          <li>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">




                <i class="fa fa-sign-out"></i>
                <span>Sign Out</span>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">


@push('scripts')

@endpush
